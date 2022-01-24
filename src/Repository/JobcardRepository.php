<?php

namespace App\Repository;

use App\Entity\Jobcard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jobcard|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jobcard|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jobcard[]    findAll()
 * @method Jobcard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobcardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jobcard::class);
    }

    // /**
    //  * @return Jobcard[] Returns an array of Jobcard objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jobcard
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
