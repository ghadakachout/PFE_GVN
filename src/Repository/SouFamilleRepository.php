<?php

namespace App\Repository;

use App\Entity\SouFamille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SouFamille|null find($id, $lockMode = null, $lockVersion = null)
 * @method SouFamille|null findOneBy(array $criteria, array $orderBy = null)
 * @method SouFamille[]    findAll()
 * @method SouFamille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SouFamilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SouFamille::class);
    }

    // /**
    //  * @return SouFamille[] Returns an array of SouFamille objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SouFamille
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
