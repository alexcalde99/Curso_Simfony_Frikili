<?php

namespace App\Controller;

use App\Entity\Posts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository(Posts::class)->findAll();
        $post = $em->getRepository(Posts::class)->findAll();
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'Bienvenido a DashboardController',
            'posts'=>$posts

        ]);
    }
}
