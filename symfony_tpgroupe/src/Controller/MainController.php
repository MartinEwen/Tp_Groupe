<?php

namespace App\Controller;

use App\Repository\PagesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(PagesRepository $pagesRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'User',
            'pages' => $pagesRepository->findAll(),
        ]);
    }
}
