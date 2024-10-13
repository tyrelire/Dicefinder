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

    public function findByFilters(
        ?string $searchTerm, 
        array $categories, 
        ?string $sort, 
        ?bool $recruitment, 
        ?string $mjSearch
    ): array
    {
        $qb = $this->createQueryBuilder('g');
    
        if ($searchTerm) {
            $qb->andWhere('g.title LIKE :searchTerm OR g.description LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }
    
        if ($mjSearch) {
            $qb->join('g.owner', 'o')
                ->andWhere('o.username LIKE :mjSearch')
                ->setParameter('mjSearch', '%' . $mjSearch . '%');
        }
        if ($recruitment !== null) {
            $qb->andWhere('g.recrutement = :recruitment')
                ->setParameter('recruitment', $recruitment);
        }
        if (count($categories) > 0) {
            foreach ($categories as $index => $category) {
                $alias = 'c' . $index;
                $qb->join('g.categories', $alias)
                    ->andWhere($alias . '.id = :category' . $index)
                    ->setParameter('category' . $index, $category->getId());
            }
        }
    
        // Gestion du tri
        if ($sort === 'newest') {
            $qb->orderBy('g.created_at', 'DESC');
        } elseif ($sort === 'oldest') {
            $qb->orderBy('g.created_at', 'ASC');
        }
    
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
