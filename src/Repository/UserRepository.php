<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Friendship;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    public function findFriendsByUser(User $user)
    {
        // Query for friendships where the user is the requester
        $qb1 = $this->createQueryBuilder('u')
            ->innerJoin('u.receiverFriendships', 'f1')
            ->where('f1.requester = :user')
            ->setParameter('user', $user);

        // Query for friendships where the user is the receiver
        $qb2 = $this->createQueryBuilder('u')
            ->innerJoin('u.friendships', 'f2')
            ->where('f2.receiver = :user')
            ->setParameter('user', $user);

        // Combine the results
        $result = array_merge($qb1->getQuery()->getResult(), $qb2->getQuery()->getResult());

        return $result;
    }

    public function findFriendsOfUser(User $user): array
    {
        $result1 = $this->createQueryBuilder('u')
            ->join('u.friendships', 'f')
            ->where('f.receiver = :user AND f.status = :status')
            ->setParameter('user', $user)
            ->setParameter('status', Friendship::STATUS_ACCEPTED)
            ->getQuery()
            ->getResult();

        $result2 = $this->createQueryBuilder('u')
            ->join('u.receiverFriendships', 'f')
            ->where('f.requester = :user AND f.status = :status')
            ->setParameter('user', $user)
            ->setParameter('status', Friendship::STATUS_ACCEPTED)
            ->getQuery()
            ->getResult();

        return array_merge($result1, $result2);
    }

    //    /**
    //     * @return User[] Returns an array of User objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('u.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?User
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
