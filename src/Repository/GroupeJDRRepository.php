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

    public function findBySearchAndCategory(?string $searchTerm, ?int $categoryId): array
    {
        $queryBuilder = $this->createQueryBuilder('g');
    
        if ($searchTerm) {
            $queryBuilder->andWhere('g.title LIKE :searchTerm OR g.description LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }
    
        if ($categoryId) {
            $queryBuilder->leftJoin('g.categories', 'c')
                ->andWhere('c.id = :categoryId')
                ->setParameter('categoryId', $categoryId);
        }
    
        return $queryBuilder->getQuery()->getResult();
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
