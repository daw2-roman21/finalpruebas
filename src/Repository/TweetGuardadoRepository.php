<?php

namespace App\Repository;

use App\Entity\TweetGuardado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TweetGuardado|null find($id, $lockMode = null, $lockVersion = null)
 * @method TweetGuardado|null findOneBy(array $criteria, array $orderBy = null)
 * @method TweetGuardado[]    findAll()
 * @method TweetGuardado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TweetGuardadoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TweetGuardado::class);
    }

    /**
     * @return TweetGuardado[] Returns an array of TweetGuardado objects
     */

    public function findByIdUser($idUser)
    {
        return $this->createQueryBuilder('v')
            ->select('v')
            ->andWhere('v.idUser = :idUser')
            ->setParameter('idUser', $idUser)
            ->getQuery()->getResult();
    }


    /*
    public function findOneBySomeField($value): ?TweetGuardado
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
