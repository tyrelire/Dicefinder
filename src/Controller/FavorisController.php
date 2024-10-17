<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\GroupeJDR;
use App\Repository\GroupeJDRRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FavorisController extends AbstractController
{
    #[Route('/favorite/add/{id}', name: 'add_favorite', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function addFavorite(GroupeJDR $groupeJDR, EntityManagerInterface $entityManager): RedirectResponse
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Utilisateur non valide');
        }

        if ($user->getFavoriteGroupeJDR()->contains($groupeJDR)) {
            $this->addFlash('warning', 'Ce jeu de rôle est déjà dans vos favoris.');
        } else {
            $user->addFavoriteGroupeJDR($groupeJDR);
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Jeu de rôle ajouté à vos favoris avec succès.');
        }

        return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeJDR->getId()]);
    }

    #[Route('/favorite/remove/{id}', name: 'remove_favorite', methods: ['GET'])]
    public function removeFavorite(GroupeJDR $groupeJDR, EntityManagerInterface $entityManager): RedirectResponse
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Utilisateur non valide');
        }

        if ($user->getFavoriteGroupeJDR()->contains($groupeJDR)) {
            $user->removeFavoriteGroupeJDR($groupeJDR);
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Jeu de rôle retiré de vos favoris avec succès.');
        } else {
            $this->addFlash('warning', 'Ce jeu de rôle n\'est pas dans vos favoris.');
        }

        return $this->redirectToRoute('app_groupe_j_d_r_show', ['id' => $groupeJDR->getId()]);
    }
}
