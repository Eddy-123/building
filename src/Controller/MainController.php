<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/", name="main_")
*/
class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        $page = "Page d'acceuil";
        return $this->render('main/home.html.twig');
    }
    
    /**
     * @Route("/eveil-conscience", name="awake")
     */
    public function awake(): Response
    {
        $page = "Eveil et conscience";
        return $this->render('main/test.html.twig', [
            'page' => $page
        ]);
    }
    
    
    /**
     * @Route("/panafricanisme", name="panafricanism")
     */
    public function panafricanism(): Response
    {
        $page = "Panafricanisme";
        return $this->render('main/test.html.twig', [
            'page' => $page
        ]);
    }
    
    
    /**
     * @Route("/vision", name="vision")
     */
    public function vision(): Response
    {
        $page = "Vision";
        return $this->render('main/test.html.twig', [
            'page' => $page
        ]);
    }
    
    
}
