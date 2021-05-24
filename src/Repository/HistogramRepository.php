<?php

namespace App\Repository;

use App\Entity\Histogram;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Histogram|null find($id, $lockMode = null, $lockVersion = null)
 * @method Histogram|null findOneBy(array $criteria, array $orderBy = null)
 * @method Histogram[]    findAll()
 * @method Histogram[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistogramRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Histogram::class);
    }

    // /**
    //  * @return Histogram[] Returns an array of Histogram objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Histogram
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
