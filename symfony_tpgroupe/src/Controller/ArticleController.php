<?php

namespace App\Controller;

use App\Repository\PagesRepository;
use App\Repository\ImagesRepository;
use App\Repository\ContentsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



#[Route('/article')]
class ArticleController extends AbstractController
{
    #[Route('/', name: 'article')]
    public function index(ContentsRepository $contentsRepository, PagesRepository $pagesRepository, ImagesRepository $imagesRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'contents' => $contentsRepository->findAll(),
            'pages' => $pagesRepository->findAll(),
            'images' => $imagesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'new_article')]
    public function new(): Response
    {
        return $this->render('article/new.html.twig');
    }
}