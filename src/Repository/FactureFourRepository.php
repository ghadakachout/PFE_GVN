<?php

namespace App\Repository;

use App\Entity\FactureFour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FactureFour|null find($id, $lockMode = null, $lockVersion = null)
 * @method FactureFour|null findOneBy(array $criteria, array $orderBy = null)
 * @method FactureFour[]    findAll()
 * @method FactureFour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureFourRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FactureFour::class);
    }

    // /**
    //  * @return FactureFour[] Returns an array of FactureFour objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FactureFour
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
