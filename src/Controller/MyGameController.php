<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\GroupeJDRRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyGameController extends AbstractController
{
    #[Route('/my/jdr', name: 'app_my_jdr')]
    public function index(Request $request, GroupeJDRRepository $jdrRepository): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Utilisateur non valide');
        }

        // Get the search term from the request
        $searchTerm = $request->query->get('search');

        // Query for the JDRs owned by the user
        $ownedJdrsQuery = $jdrRepository->createQueryBuilder('g')
            ->where('g.owner = :userId')
            ->setParameter('userId', $user->getId());

        // Query for the JDRs where the user is a player
        $playerJdrsQuery = $jdrRepository->createQueryBuilder('g')
            ->innerJoin('g.players', 'p')
            ->where('p.id = :userId')
            ->setParameter('userId', $user->getId());

        // If there's a search term, filter the results
        if ($searchTerm) {
            $ownedJdrsQuery
                ->andWhere('g.title LIKE :searchTerm OR g.description LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');

            $playerJdrsQuery
                ->andWhere('g.title LIKE :searchTerm OR g.description LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        // Execute the queries
        $ownedJdrs = $ownedJdrsQuery->getQuery()->getResult();
        $playerJdrs = $playerJdrsQuery->getQuery()->getResult();

        return $this->render('my_game/index.html.twig', [
            'ownedJdrs' => $ownedJdrs,
            'playerJdrs' => $playerJdrs,
            'searchTerm' => $searchTerm, // Pass the search term back to the template
        ]);
    }
}
