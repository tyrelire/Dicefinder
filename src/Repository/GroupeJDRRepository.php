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
        $dql = 'SELECT g FROM App\Entity\GroupeJDR g';
        
        $parameters = [];
        $conditions = [];
    
        if ($searchTerm) {
            $conditions[] = '(g.title LIKE :searchTerm OR g.description LIKE :searchTerm)';
            $parameters['searchTerm'] = '%' . $searchTerm . '%';
        }
    
        if ($categoryId) {
            $dql .= ' JOIN g.categories c';
            $conditions[] = 'c.id = :categoryId';
            $parameters['categoryId'] = $categoryId;
        }
    
        if (!empty($conditions)) {
            $dql .= ' WHERE ' . implode(' AND ', $conditions);
        }

        // Utilisation de getEntityManager() au lieu de $_em
        $query = $this->getEntityManager()->createQuery($dql)->setParameters($parameters);
    
        return $query->getResult();
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
