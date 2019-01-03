<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcoeController extends AbstractController
{
    /**
     * @Route("/welcoe", name="welcoe")
     */
    public function index()
    {
        return $this->render('welcoe/index.html.twig', [
            'controller_name' => 'WelcoeController',
        ]);
    }
}
