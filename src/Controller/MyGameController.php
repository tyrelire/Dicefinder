<?php

namespace App\Controller;

use App\Repository\GroupeJDRRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class MyGameController  extends AbstractController
{
    #[Route('/my/jdr', name: 'app_my_jdr')]
    public function index(GroupeJDRRepository $jdrRepository): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Utilisateur non valide');
        }

        $ownedJdrs = $jdrRepository->findBy(['owner' => $user]);

        $playerJdrs = $jdrRepository->createQueryBuilder('g')
            ->innerJoin('g.players', 'p')
            ->where('p.id = :userId')
            ->setParameter('userId', $user->getId())
            ->getQuery()
            ->getResult();

        return $this->render('my_game/index.html.twig', [
            'ownedJdrs' => $ownedJdrs,
            'playerJdrs' => $playerJdrs,
        ]);
    }
}
