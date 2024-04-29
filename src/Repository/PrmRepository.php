<?php

namespace App\Repository;

use App\Entity\Prm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Prm>
 *
 * @method Prm|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prm|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prm[]    findAll()
 * @method Prm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prm::class);
    }

    //    /**
    //     * @return Prm[] Returns an array of Prm objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Prm
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
