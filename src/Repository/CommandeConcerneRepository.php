<?php

namespace App\Repository;

use App\Entity\CommandeConcerne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommandeConcerne|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeConcerne|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeConcerne[]    findAll()
 * @method CommandeConcerne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeConcerneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeConcerne::class);
    }

    // /**
    //  * @return CommandeConcerne[] Returns an array of CommandeConcerne objects
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
    public function findOneBySomeField($value): ?CommandeConcerne
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
