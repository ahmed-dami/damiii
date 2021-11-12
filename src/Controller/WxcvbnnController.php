<?php

namespace App\Controller;

use App\Entity\Wxcvbnn;
use App\Form\WxcvbnnType;
use App\Repository\WxcvbnnRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wxcvbnn")
 */
class WxcvbnnController extends AbstractController
{
    /**
     * @Route("/", name="wxcvbnn_index", methods={"GET"})
     */
    public function index(WxcvbnnRepository $wxcvbnnRepository): Response
    {
        return $this->render('wxcvbnn/index.html.twig', [
            'wxcvbnns' => $wxcvbnnRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="wxcvbnn_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $wxcvbnn = new Wxcvbnn();
        $form = $this->createForm(WxcvbnnType::class, $wxcvbnn);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($wxcvbnn);
            $entityManager->flush();

            return $this->redirectToRoute('wxcvbnn_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('wxcvbnn/new.html.twig', [
            'wxcvbnn' => $wxcvbnn,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="wxcvbnn_show", methods={"GET"})
     */
    public function show(Wxcvbnn $wxcvbnn): Response
    {
        return $this->render('wxcvbnn/show.html.twig', [
            'wxcvbnn' => $wxcvbnn,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="wxcvbnn_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Wxcvbnn $wxcvbnn): Response
    {
        $form = $this->createForm(WxcvbnnType::class, $wxcvbnn);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('wxcvbnn_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('wxcvbnn/edit.html.twig', [
            'wxcvbnn' => $wxcvbnn,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="wxcvbnn_delete", methods={"POST"})
     */
    public function delete(Request $request, Wxcvbnn $wxcvbnn): Response
    {
        if ($this->isCsrfTokenValid('delete'.$wxcvbnn->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($wxcvbnn);
            $entityManager->flush();
        }

        return $this->redirectToRoute('wxcvbnn_index', [], Response::HTTP_SEE_OTHER);
    }
}
