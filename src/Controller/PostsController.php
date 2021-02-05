<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PostsController extends AbstractController
{
    /**
     * @Route("/registrar-posts", name="RegistrarPosts")
     */
    public function index(Request $request)
    {

        $post = new Posts();
        $form = $this->createForm(PostType::class,$post);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            //Obtenemos el usuario
            $user = $this->getUser();
            $post->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('dashboard');
        }
        return $this->render('posts/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
