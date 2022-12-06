<?php

namespace App\Controller;


use App\Entity\Pages;
use App\Entity\Images;
use App\Entity\Contents;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_show', methods: ['GET'])]
    public function index(Pages $page, Contents $content, Images $image): Response
    {
        return $this->render('article/index.html.twig', [
            'page' => $page,
            'content' => $content,
            'image' => $image,
        ]);
    }
}
