<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlognsiController extends AbstractController
{
    #[Route('/blognsi', name: 'blognsi')]
    public function index(): Response
    {
        return $this->render('blognsi/index.html.twig', [
            'controller_name' => 'BlognsiController',
        ]);
    }
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('blognsi/home.html.twig', [
            'title' => "bienvenue",
            'age' => 19
        ]);
    }
}
