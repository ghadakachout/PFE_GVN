<?php

namespace App\Repository;

use App\Entity\DeclarationDouaniere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DeclarationDouaniere|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeclarationDouaniere|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeclarationDouaniere[]    findAll()
 * @method DeclarationDouaniere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeclarationDouaniereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeclarationDouaniere::class);
    }

    // /**
    //  * @return DeclarationDouaniere[] Returns an array of DeclarationDouaniere objects
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
    public function findOneBySomeField($value): ?DeclarationDouaniere
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
