<?php

namespace App\Repository;

use App\Entity\CommandeFour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommandeFour|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeFour|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeFour[]    findAll()
 * @method CommandeFour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeFourRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeFour::class);
    }

    // /**
    //  * @return CommandeFour[] Returns an array of CommandeFour objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CommandeFour
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
