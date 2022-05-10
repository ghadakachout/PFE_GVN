<?php

namespace App\Repository;

use App\Entity\DevisClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DevisClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method DevisClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method DevisClient[]    findAll()
 * @method DevisClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DevisClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DevisClient::class);
    }

    // /**
    //  * @return DevisClient[] Returns an array of DevisClient objects
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
    public function findOneBySomeField($value): ?DevisClient
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
