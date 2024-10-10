<?php

namespace App\Repository;

use App\Entity\GroupeJDR;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GroupeJDR>
 */
class GroupeJDRRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupeJDR::class);
    }

    public function findByFilters(?string $searchTerm, array $categories, ?string $status, ?bool $recrutement): array
    {
        $qb = $this->createQueryBuilder('g');
    
        // Filtre par terme de recherche
        if ($searchTerm) {
            $qb->andWhere('g.title LIKE :searchTerm OR g.description LIKE :searchTerm')
               ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }
    
        // Filtre par catégories multiples
        if (count($categories) > 0) {
            $qb->join('g.categories', 'c')  // Joins the categories relation
               ->andWhere('c.id IN (:categories)')
               ->setParameter('categories', array_map(function($category) {
                   return $category->getId();  // Extracts the category IDs
               }, $categories));
        }
    
        // Filtre par statut
        if ($status) {
            $qb->andWhere('g.status = :status')
               ->setParameter('status', $status);
        }
    
        // Filtre par recrutement
        if (null !== $recrutement) {
            $qb->andWhere('g.recrutement = :recrutement')
               ->setParameter('recrutement', $recrutement);
        }
    
        // Tri par date de création
        $qb->orderBy('g.created_at', 'DESC');
    
        return $qb->getQuery()->getResult();
    }
    

    //    /**
    //     * @return GroupeJDR[] Returns an array of GroupeJDR objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('g.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?GroupeJDR
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
