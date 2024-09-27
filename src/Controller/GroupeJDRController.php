<?php

namespace App\Controller;

use App\Entity\GroupeJDR;
use App\Entity\Invitation;
use App\Form\GroupeJDRType;
use App\Repository\UserRepository;
use App\Repository\GroupeJDRRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Repository\InvitationRepository;

#[Route('/groupe/jdr')]
final class GroupeJDRController extends AbstractController
{
    #[Route(name: 'app_groupe_j_d_r_index', methods: ['GET'])]
    public function index(GroupeJDRRepository $groupeJDRRepository): Response
    {
        $jdrs = $groupeJDRRepository->findAll();
        $user = $this->getUser();

        return $this->render('groupe_jdr/index.html.twig', [
            'groupe_j_d_rs' => $jdrs,
            'user' => $user,
        ]);
    }

    #[Route('/new', name: 'app_groupe_j_d_r_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $groupeJDR = new GroupeJDR();
        $form = $this->createForm(GroupeJDRType::class, $groupeJDR);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('picture')->getData();
            if ($file) {
                $newFilename = $this->uploadImage($file, $slugger);
                $groupeJDR->setPicture($newFilename);
            }

            // Enregistrer le status et les catégories
            $groupeJDR->setOwner($this->getUser());
            $now = new \DateTime();
            $groupeJDR->setCreatedAt($now);
            $groupeJDR->setEditAt($now);

            $entityManager->persist($groupeJDR);
            $entityManager->flush();

            $this->addFlash('success', 'Le groupe JDR a été créé avec succès.');

            return $this->redirectToRoute('app_groupe_j_d_r_edit', ['id' => $groupeJDR->getId()]);
        }

        return $this->render('groupe_jdr/new.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
            'form' => $form,
            'isNew' => true,
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
    public function edit(
        Request $request,
        GroupeJDR $groupeJDR,
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
        InvitationRepository $invitationRepository,
        SluggerInterface $slugger
    ): Response {
        $form = $this->createForm(GroupeJDRType::class, $groupeJDR);
        $form->handleRequest($request);

        $addedPlayers = $request->request->get('added_players');
        if ($addedPlayers) {
            $playerIds = json_decode($addedPlayers, true);
            foreach ($playerIds as $userId) {
                $user = $userRepository->find($userId);

                if ($user && !$invitationRepository->findOneBy(['groupeJDR' => $groupeJDR, 'user' => $user])) {
                    $invitation = new Invitation();
                    $invitation->setGroupeJDR($groupeJDR);
                    $invitation->setUser($user);
                    $invitation->setStatus('pending');

                    $entityManager->persist($invitation);
                }
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('picture')->getData();
            if ($file) {
                $newFilename = $this->uploadImage($file, $slugger);
                $groupeJDR->setPicture($newFilename);
            }

            $groupeJDR->setEditAt(new \DateTime());
            $entityManager->flush();

            return $this->redirectToRoute('app_groupe_j_d_r_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('groupe_jdr/edit.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
            'form' => $form,
            'isNew' => false,
        ]);
    }

    #[Route('/{id}', name: 'app_groupe_j_d_r_delete', methods: ['POST'])]
    public function delete(Request $request, GroupeJDR $groupeJDR, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$groupeJDR->getId(), $request->request->get('_token'))) {
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
        $maxSize = 2 * 1024 * 1024;
        if ($file->getSize() > $maxSize) {
            throw new \Exception('Le fichier est trop volumineux. La taille maximale autorisée est de 2 Mo.');
        }

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $file->move(
                $this->getParameter('uploads_directory'),
                $newFilename
            );
        } catch (FileException $e) {
            // Gérer l'exception selon vos besoins
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
