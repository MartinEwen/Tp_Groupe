<?php

namespace App\Controller;

use App\Entity\Contents;
use App\Form\ContentsType;
use App\Repository\PagesRepository;
use App\Repository\ContentsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/contents')]
class ContentsController extends AbstractController
{
    #[Route('/', name: 'contents_index', methods: ['GET'])]
    public function index(ContentsRepository $contentsRepository, PagesRepository $pagesRepository): Response
    {
        return $this->render('contents/index.html.twig', [
            'contents' => $contentsRepository->findAll(),
            'pages' => $pagesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'contents_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ContentsRepository $contentsRepository): Response
    {
        $content = new Contents();
        $form = $this->createForm(ContentsType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contentsRepository->save($content, true);

            return $this->redirectToRoute('images_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contents/new.html.twig', [
            'content' => $content,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'contents_show', methods: ['GET'])]
    public function show(Contents $content): Response
    {
        return $this->render('contents/show.html.twig', [
            'content' => $content,
        ]);
    }

    #[Route('/{id}/edit', name: 'contents_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contents $content, ContentsRepository $contentsRepository): Response
    {
        $form = $this->createForm(ContentsType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contentsRepository->save($content, true);

            return $this->redirectToRoute('contents_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contents/edit.html.twig', [
            'content' => $content,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'contents_delete', methods: ['POST'])]
    public function delete(Request $request, Contents $content, ContentsRepository $contentsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$content->getId(), $request->request->get('_token'))) {
            $contentsRepository->remove($content, true);
        }

        return $this->redirectToRoute('contents_index', [], Response::HTTP_SEE_OTHER);
    }
}
