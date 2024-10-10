<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\GroupeJDRRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(GroupeJDRRepository $groupeJDRRepository, CategoryRepository $categoryRepository): Response
    {
        $groupes = $groupeJDRRepository->findAll();
    
        $groupesRecrutementOuvert = array_filter($groupes, fn($groupe) => $groupe->isRecrutement());
        $groupesNonPleins = array_filter($groupes, fn($groupe) => count($groupe->getPlayers()) < $groupe->getMaxPlayer());
    
        usort($groupes, fn($a, $b) => $b->getCreatedAt() <=> $a->getCreatedAt());
    
        $nouveauxGroupes = array_slice($groupes, 0, 4);
    
        $categories = $categoryRepository->findAll();
    
        return $this->render('home/index.html.twig', [
            'groupes_recrutement_ouvert' => $groupesRecrutementOuvert,
            'groupes_non_pleins' => $groupesNonPleins,
            'groupes' => $groupes,
            'nouveaux_groupes' => $nouveauxGroupes,
            'categories' => $categories,
        ]);
    }
}
