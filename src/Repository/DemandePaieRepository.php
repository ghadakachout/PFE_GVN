<?php

namespace App\Repository;

use App\Entity\DemandePaie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DemandePaie|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandePaie|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemandePaie[]    findAll()
 * @method DemandePaie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandePaieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandePaie::class);
    }

    // /**
    //  * @return DemandePaie[] Returns an array of DemandePaie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DemandePaie
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
