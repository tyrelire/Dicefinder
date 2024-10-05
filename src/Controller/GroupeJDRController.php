<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\GroupeJDR;
use App\Entity\Invitation;
use App\Form\GroupeJDRType;
use App\Repository\UserRepository;
use App\Repository\CategoryRepository;
use App\Repository\GroupeJDRRepository;
use App\Repository\InvitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/groupe/jdr')]
final class GroupeJDRController extends AbstractController
{
    #[Route('/', name: 'app_groupe_j_d_r_index', methods: ['GET'])]
    public function index(Request $request, GroupeJDRRepository $groupeJDRRepository, CategoryRepository $categoryRepository): Response
    {
        $searchTerm = $request->query->get('search');
        $categoryId = $request->query->get('category');

        $categories = $categoryRepository->findAll();
        $selectedCategory = null;

        if ($categoryId) {
            $selectedCategory = $categoryRepository->find($categoryId);
        }

        $jdrs = $groupeJDRRepository->findBySearchAndCategory($searchTerm, $selectedCategory ? $selectedCategory->getId() : null);

        return $this->render('groupe_jdr/index.html.twig', [
            'groupe_j_d_rs' => $jdrs,
            'user' => $this->getUser(),
            'searchTerm' => $searchTerm,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
        ]);
    }

    #[Route('/new', name: 'app_groupe_j_d_r_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        if (!$this->getUser()) {
            $this->addFlash('error', 'Vous devez vous connecter pour créer un Univers.');
            return $this->redirectToRoute('app_groupe_j_d_r_index');
        }
        $groupeJDR = new GroupeJDR();
        $form = $this->createForm(GroupeJDRType::class, $groupeJDR);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('picture')->getData();
            if ($file) {
                $newFilename = $this->uploadImage($file, $slugger);
                $groupeJDR->setPicture($newFilename);
            } else {
                $this->addFlash('error', 'L\'image est obligatoire pour créer un groupe de Univers.');
                return $this->render('groupe_jdr/new.html.twig', [
                    'groupe_j_d_r' => $groupeJDR,
                    'form' => $form,
                    'isNew' => true,
                ]);
            }

            $groupeJDR->setOwner($this->getUser());
            $now = new \DateTime();
            $groupeJDR->setCreatedAt($now);
            $groupeJDR->setEditAt($now);

            foreach ($groupeJDR->getEvents() as $event) {
                $event->setGroupeJDR($groupeJDR);
            }

            $entityManager->persist($groupeJDR);
            $entityManager->flush();

            $this->addFlash('success', 'L\'Univers a été créé avec succès.');
            return $this->redirectToRoute('app_groupe_j_d_r_edit', ['id' => $groupeJDR->getId()]);
        }

        return $this->render('groupe_jdr/new.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
            'form' => $form,
            'isNew' => true,
        ]);
    }

    #[Route('/{id}', name: 'app_groupe_j_d_r_show', methods: ['GET'])]
    public function show(GroupeJDR $groupeJDR, GroupeJDRRepository $groupeJDRRepository, InvitationRepository $invitationRepository): Response
    {
        $recruitingJDRs = $groupeJDRRepository->findBy(['recrutement' => true]);
        $invitations = $invitationRepository->findBy(['groupeJDR' => $groupeJDR]);

        $currentUser = $this->getUser();
        $requestInProgress = false;
        $isOwner = false;
        $isMember = false;

        if ($currentUser) {
            if ($groupeJDR->getOwner() === $currentUser) {
                $isOwner = true;
            }

            if ($groupeJDR->getPlayers()->contains($currentUser)) {
                $isMember = true;
            }

            $invitation = $invitationRepository->findOneBy([
                'requestedBy' => $currentUser,
                'groupeJDR' => $groupeJDR,
                'status' => 'pending'
            ]);

            if ($invitation) {
                $requestInProgress = true;
            }
        }

        $isClosed = in_array($groupeJDR->getStatus(), ['complet', 'termine', 'annule']);

        return $this->render('groupe_jdr/show.html.twig', [
            'groupe_j_d_r' => $groupeJDR,
            'recruiting_jdrs' => $recruitingJDRs,
            'invitations' => $invitations,
            'request_in_progress' => $requestInProgress,
            'is_owner' => $isOwner,
            'is_member' => $isMember,
            'is_closed' => $isClosed,
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
        if ($groupeJDR->getOwner() !== $this->getUser()) {
            $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier cette Univers.');
            return $this->redirectToRoute('app_groupe_j_d_r_index');
        }

        $form = $this->createForm(GroupeJDRType::class, $groupeJDR, ['is_edit' => true]);
        $form->handleRequest($request);

        $addedPlayers = $request->request->get('added_players');
        if ($addedPlayers) {
            $playerIds = json_decode($addedPlayers, true);
            foreach ($playerIds as $userId) {
                $user = $userRepository->find($userId);
                if ($user && !$invitationRepository->findOneBy(['groupeJDR' => $groupeJDR, 'user' => $user])) {
                    $invitation = new Invitation();
                    $invitation->setUser($user);
                    $invitation->setGroupeJDR($groupeJDR);
                    $invitation->setStatus('pending');
                    $invitation->setInitiatedBy('owner');
                    $invitation->setRequestedBy($this->getUser());
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

            foreach ($groupeJDR->getEvents() as $event) {
                if (!$event->getGroupeJDR()) {
                    $event->setGroupeJDR($groupeJDR);
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'L\'Univers a été mis à jour avec succès.');

            return $this->redirectToRoute('app_my_jdr', [], Response::HTTP_SEE_OTHER);
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
        if ($this->isCsrfTokenValid('delete' . $groupeJDR->getId(), $request->request->get('_token'))) {
            if ($groupeJDR->getPicture()) {
                $this->deleteImage($groupeJDR->getPicture());
            }

            foreach ($groupeJDR->getEvents() as $event) {
                $entityManager->remove($event);
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
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        try {
            $file->move(
                $this->getParameter('uploads_directory'),
                $newFilename
            );
        } catch (FileException $e) {
        }

        return $newFilename;
    }

    private function deleteImage(string $filename): void
    {
        $filePath = $this->getParameter('uploads_directory') . '/' . $filename;
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
}
