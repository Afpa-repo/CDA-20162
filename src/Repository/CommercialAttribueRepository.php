<?php

namespace App\Repository;

use App\Entity\CommercialAttribue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommercialAttribue|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommercialAttribue|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommercialAttribue[]    findAll()
 * @method CommercialAttribue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommercialAttribueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommercialAttribue::class);
    }

    // /**
    //  * @return CommercialAttribue[] Returns an array of CommercialAttribue objects
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
    public function findOneBySomeField($value): ?CommercialAttribue
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
