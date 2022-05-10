<?php

namespace App\Repository;

use App\Entity\DossierVente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DossierVente|null find($id, $lockMode = null, $lockVersion = null)
 * @method DossierVente|null findOneBy(array $criteria, array $orderBy = null)
 * @method DossierVente[]    findAll()
 * @method DossierVente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DossierVenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DossierVente::class);
    }

    // /**
    //  * @return DossierVente[] Returns an array of DossierVente objects
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
    public function findOneBySomeField($value): ?DossierVente
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
