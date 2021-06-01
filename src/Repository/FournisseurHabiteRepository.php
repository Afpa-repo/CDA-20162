<?php

namespace App\Repository;

use App\Entity\FournisseurHabite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FournisseurHabite|null find($id, $lockMode = null, $lockVersion = null)
 * @method FournisseurHabite|null findOneBy(array $criteria, array $orderBy = null)
 * @method FournisseurHabite[]    findAll()
 * @method FournisseurHabite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FournisseurHabiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FournisseurHabite::class);
    }

    // /**
    //  * @return FournisseurHabite[] Returns an array of FournisseurHabite objects
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
    public function findOneBySomeField($value): ?FournisseurHabite
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
