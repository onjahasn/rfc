<?php

namespace App\Repository;

use App\Entity\CanalDeContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CanalDeContact>
 *
 * @method CanalDeContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method CanalDeContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method CanalDeContact[]    findAll()
 * @method CanalDeContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CanalDeContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CanalDeContact::class);
    }

    //    /**
    //     * @return CanalDeContact[] Returns an array of CanalDeContact objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?CanalDeContact
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
