<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Post;
use App\Form\Type\PostType;
use App\Form\Type\PostEditType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function postAction(Request $request, SluggerInterface $slugger)
    {
        $post = $this->getUser() ? Post::createFromUser($this->getUser()) : Post::create();
        $form = $this->createForm(PostType::class, $post);
        $em = $this->getDoctrine()->getManager();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post->setPublishedAt(new \DateTime());

            $pictureFile = $form->get('picture')->getData();

            if ($pictureFile) {
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pictureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $pictureFile->move(
                        $this->getParameter('pictures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }


                $post->setPicture($newFilename);
            }

            $em->persist($post);// prepare to insert into the database
            $em->flush();// execute all SQL queries

            $this->addFlash('success', 'Post sent!');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('post/post.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/posts", name="admin_post_list")
     */
     public function listAction(Request $request)
     {
         $em = $this->getDoctrine()->getManager();
 
         $filter = $request->query->get('filter', 'all');
         $posts = $em->getRepository(Post::class)->findForList($filter);
 
         return $this->render('post/admin/list.html.twig', [
             'posts' => $posts
         ]);
     }

     /**
     * @Route("/admin/posts/{id}", name="admin_post_show")
     * @Security("is_granted('ROLE_ADMIN')")
     */
     public function showAction(Request $request, Post $post)
     {
         return $this->render('post/admin/show.html.twig', [
             'post' => $post,
         ]);
     }

     /**
     * @Route("/admin/posts/{id}/edit", name="admin_post_edit")
     */
    public function editAction(Request $request, Post $post)
    {
        $form = $this->createForm(PostEditType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Post updated!');

            return $this->redirectToRoute('admin_post_list');
        }

        return $this->render('post/admin/edit.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }

      /**
     * Deletes a Post entity.
     *
     * @Route("/admin/{id}/delete", name="admin_post_delete")
     */
    public function deleteAction(Request $request, Post $post)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        $this->addFlash('success', 'Post deleted');

        return $this->redirectToRoute('admin_post_list');
    }
}
