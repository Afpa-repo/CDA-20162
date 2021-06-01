<?php

namespace App\Repository;

use App\Entity\FaitPartie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FaitPartie|null find($id, $lockMode = null, $lockVersion = null)
 * @method FaitPartie|null findOneBy(array $criteria, array $orderBy = null)
 * @method FaitPartie[]    findAll()
 * @method FaitPartie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FaitPartieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FaitPartie::class);
    }

    // /**
    //  * @return FaitPartie[] Returns an array of FaitPartie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FaitPartie
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
