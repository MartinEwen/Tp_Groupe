<?php

namespace App\Controller;

use App\Entity\Pages;
use App\Form\PagesType;
use App\Repository\PagesRepository;
use App\Repository\CategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/pages')]
class PagesController extends AbstractController
{
    #[Route('/', name: 'pages_index', methods: ['GET'])]
    public function index(PagesRepository $pagesRepository, CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('pages/index.html.twig', [
            'pages' => $pagesRepository->findAll(),
            'categories' => $categoriesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'pages_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PagesRepository $pagesRepository): Response
    {
        $page = new Pages();
        $form = $this->createForm(PagesType::class, $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pagesRepository->save($page, true);

            return $this->redirectToRoute('contents_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pages/new.html.twig', [
            'page' => $page,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'pages_show', methods: ['GET'])]
    public function show(Pages $page): Response
    {
        return $this->render('pages/show.html.twig', [
            'page' => $page,
        ]);
    }

    #[Route('/{id}/edit', name: 'pages_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pages $page, PagesRepository $pagesRepository): Response
    {
        $form = $this->createForm(PagesType::class, $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pagesRepository->save($page, true);

            return $this->redirectToRoute('pages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pages/edit.html.twig', [
            'page' => $page,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'pages_delete', methods: ['POST'])]
    public function delete(Request $request, Pages $page, PagesRepository $pagesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$page->getId(), $request->request->get('_token'))) {
            $pagesRepository->remove($page, true);
        }

        return $this->redirectToRoute('pages_index', [], Response::HTTP_SEE_OTHER);
    }
}
