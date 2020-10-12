<?php

namespace App\Controller;

use App\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Post;

class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
     public function listAction(Request $request)
     {
         $em = $this->getDoctrine()->getManager();
 
         $filter = $request->query->get('filter', 'all');

         $posts = $em->getRepository(Post::class)->findForList($filter);

         return $this->render('default/index.html.twig', [
             'posts' => $posts
         ]);
     }

     /**
     * @Route("/posts/{id}", name="post_show")
     */
     public function showAction(Request $request, Post $post)
     {
         $comments = $this->getDoctrine()->getRepository(Comment::class)->findBy(['post' => $post]);

         return $this->render('default/show.html.twig', [
             'post' => $post,
             'comments' => $comments
         ]);
     }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        return $this->render('default/about.html.twig');
    }
}
