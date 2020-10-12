<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Comment;
use App\Form\Type\CommentType;
use Doctrine\ORM\EntityManagerInterface;

class CommentController extends AbstractController
{
    /**
     * @Route("/comment", name="comment")
     */
    public function commentAction(Request $request, EntityManagerInterface $em, UserInterface $user = null)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setPublishedAt(new \DateTime());
            //var_dump($form);
            $comment->setUser($this->getUser());
            $post = $this->getDoctrine()->getRepository(Post::class)->find($request->query->get("post"));

            $comment->setPost($post);


            $em->persist($comment);// prepare to insert into the database
            $em->flush();// execute all SQL queries

            $this->addFlash('success', 'Comment sent!');

            return $this->redirectToRoute('homepage');
        }



        return $this->render('comment/comment.html.twig', [
            'form' => $form->createView(),
        //    'post' => $post
        ]);
    }
}
