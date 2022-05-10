<?php

namespace App\Repository;

use App\Entity\NGP;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NGP|null find($id, $lockMode = null, $lockVersion = null)
 * @method NGP|null findOneBy(array $criteria, array $orderBy = null)
 * @method NGP[]    findAll()
 * @method NGP[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NGPRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NGP::class);
    }

    // /**
    //  * @return NGP[] Returns an array of NGP objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NGP
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
