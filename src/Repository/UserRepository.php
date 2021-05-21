<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @return User[] Returns an array of User objects
     */

    public function encontrarUsuarios($username)
    {
        // $entityManager = $this->getEnetityManager();
        // $query = $entityManager->createQuery(
        //     'SELECT * FROM 
        //     App\Entity\User WHERE username LIKE :username%
        //     ORDER BY username ASC LIMIT 5'
        // )->setParameter('username', $username);
        // return $query->getResult();
        return $this->createQueryBuilder('u')
            ->andWhere('u.username LIKE :username')
            ->setParameter('username', $username . '%')
            ->orderBy('u.username', 'ASC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }


    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
