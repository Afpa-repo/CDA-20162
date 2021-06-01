<?php

namespace App\Repository;

use App\Entity\ClientHabite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientHabite|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientHabite|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientHabite[]    findAll()
 * @method ClientHabite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientHabiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientHabite::class);
    }

    // /**
    //  * @return ClientHabite[] Returns an array of ClientHabite objects
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
    public function findOneBySomeField($value): ?ClientHabite
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
