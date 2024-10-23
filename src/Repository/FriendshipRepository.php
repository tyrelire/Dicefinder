<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Friendship;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Friendship>
 */
class FriendshipRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Friendship::class);
    }

    public function findFriendsOfUser(User $user): array
    {
        $qb = $this->createQueryBuilder('f');
        
        return $qb->where($qb->expr()->andX(
                $qb->expr()->eq('f.requester', ':user'),
                $qb->expr()->eq('f.status', ':status')
            ))
            ->orWhere($qb->expr()->andX(
                $qb->expr()->eq('f.receiver', ':user'),
                $qb->expr()->eq('f.status', ':status')
            ))
            ->setParameter('user', $user)
            ->setParameter('status', Friendship::STATUS_ACCEPTED)
            ->getQuery()
            ->getResult();
    }

    public function findFriendship(User $currentUser, User $profileUser): ?Friendship
    {
        return $this->createQueryBuilder('f')
            ->where('f.requester = :currentUser AND f.receiver = :profileUser')
            ->orWhere('f.requester = :profileUser AND f.receiver = :currentUser')
            ->setParameter('currentUser', $currentUser)
            ->setParameter('profileUser', $profileUser)
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function findPendingRequests(User $user): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.receiver = :user AND f.status = :status')
            ->setParameter('user', $user)
            ->setParameter('status', Friendship::STATUS_PENDING)
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Friendship[] Returns an array of Friendship objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('f.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Friendship
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
