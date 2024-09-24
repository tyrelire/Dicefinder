<?php

namespace App\Controller;

use App\Entity\GroupeJDR;
use App\Form\GroupeJDRType;
use App\Repository\GroupeJDRRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/groupe/jdr')]
final class GroupeJDRController extends AbstractController
{
    #[Route(name: 'app_groupe_j_d_r_index', methods: ['GET'])]
    public function index(GroupeJDRRepository $groupeJDRRepository): Response
    {
        return $this->render('groupe_jdr/index.html.twig', [
            'groupe_j_d_rs' => $groupeJDRRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_groupe_j_d_r_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $groupeJDR = new GroupeJDR();
        $form = $this->createForm(GroupeJDRType::class, $groupeJDR);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $file = $form->get('picture')->getData();
            if ($file) {
                $newFilename = $this->uploadImage($file, $slugger);
                $groupeJDR->setPicture($newFilename);
            }

            // Set the owner (the user who creates the JDR group)
            $groupeJDR->setOwner($this->getUser());

            // Set the created_at field
            $groupeJDR->setCreatedAt(new \DateTime());

            $entityManager->persist($groupeJDR);
            $entityManager->flush();

            return $this->redirectToRoute('app_groupe_j_d_r_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('groupe_jdr/new.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_groupe_j_d_r_show', methods: ['GET'])]
    public function show(GroupeJDR $groupeJDR): Response
    {
        return $this->render('groupe_jdr/show.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_groupe_j_d_r_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, GroupeJDR $groupeJDR, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(GroupeJDRType::class, $groupeJDR);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload and remove old image if new one is uploaded
            $file = $form->get('picture')->getData();
            if ($file) {
                // Delete the old image if it exists
                if ($groupeJDR->getPicture()) {
                    $this->deleteImage($groupeJDR->getPicture());
                }

                $newFilename = $this->uploadImage($file, $slugger);
                $groupeJDR->setPicture($newFilename);
            }

            // Update the edit_at field
            $groupeJDR->setEditAt(new \DateTime());

            $entityManager->flush();

            return $this->redirectToRoute('app_groupe_j_d_r_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('groupe_jdr/edit.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_groupe_j_d_r_delete', methods: ['POST'])]
    public function delete(Request $request, GroupeJDR $groupeJDR, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$groupeJDR->getId(), $request->request->get('_token'))) {
            // Delete the image when deleting the entity
            if ($groupeJDR->getPicture()) {
                $this->deleteImage($groupeJDR->getPicture());
            }

            $entityManager->remove($groupeJDR);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_groupe_j_d_r_index', [], Response::HTTP_SEE_OTHER);
    }

    private function uploadImage($file, SluggerInterface $slugger): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $file->move(
                $this->getParameter('uploads_directory'), // 'uploads_directory' should be defined in services.yaml
                $newFilename
            );
        } catch (FileException $e) {
            // Handle the exception if something happens during file upload
        }

        return $newFilename;
    }

    private function deleteImage(string $filename): void
    {
        $filePath = $this->getParameter('uploads_directory').'/'.$filename;
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
}
