<?php

namespace App\Repository;

use App\Entity\Quotas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Quotas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quotas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quotas[]    findAll()
 * @method Quotas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuotasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quotas::class);
    }

    // /**
    //  * @return Quotas[] Returns an array of Quotas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Quotas
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
