<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SyController extends AbstractController
{
    #[Route('/sy', name: 'app_sy')]
    public function index(): Response
    {
        return $this->render('sy/index.html.twig', [
            'controller_name' => 'SyController',
        ]);

        
    }

    /**
     * @Route("/", name="home")
     */

    public function home(){
        return $this->render('sy/home.html.twig');
    }

    #[Route('/kamal', name: 'app_kamal')] 
    public function kamal()
    {
        return $this->render('sy/kamal.html.twig');
    }
}
