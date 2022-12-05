<?php

namespace App\Controller;

use App\Entity\Contents;
use App\Form\ContentsType;
use App\Repository\ContentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contents')]
class ContentsController extends AbstractController
{
    #[Route('/', name: 'app_contents_index', methods: ['GET'])]
    public function index(ContentsRepository $contentsRepository): Response
    {
        return $this->render('contents/index.html.twig', [
            'contents' => $contentsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_contents_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ContentsRepository $contentsRepository): Response
    {
        $content = new Contents();
        $form = $this->createForm(ContentsType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contentsRepository->save($content, true);

            return $this->redirectToRoute('app_contents_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contents/new.html.twig', [
            'content' => $content,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contents_show', methods: ['GET'])]
    public function show(Contents $content): Response
    {
        return $this->render('contents/show.html.twig', [
            'content' => $content,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_contents_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contents $content, ContentsRepository $contentsRepository): Response
    {
        $form = $this->createForm(ContentsType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contentsRepository->save($content, true);

            return $this->redirectToRoute('app_contents_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contents/edit.html.twig', [
            'content' => $content,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contents_delete', methods: ['POST'])]
    public function delete(Request $request, Contents $content, ContentsRepository $contentsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$content->getId(), $request->request->get('_token'))) {
            $contentsRepository->remove($content, true);
        }

        return $this->redirectToRoute('app_contents_index', [], Response::HTTP_SEE_OTHER);
    }
}
