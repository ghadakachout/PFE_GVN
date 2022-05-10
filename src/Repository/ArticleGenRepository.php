<?php

namespace App\Repository;

use App\Entity\ArticleGen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArticleGen|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleGen|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleGen[]    findAll()
 * @method ArticleGen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleGenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleGen::class);
    }

    // /**
    //  * @return ArticleGen[] Returns an array of ArticleGen objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ArticleGen
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
