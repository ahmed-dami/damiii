<?php

namespace App\Repository;

use App\Entity\Wxcvbnn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Wxcvbnn|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wxcvbnn|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wxcvbnn[]    findAll()
 * @method Wxcvbnn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WxcvbnnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wxcvbnn::class);
    }

    // /**
    //  * @return Wxcvbnn[] Returns an array of Wxcvbnn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Wxcvbnn
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
