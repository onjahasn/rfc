<?php

namespace App\Repository;

use App\Entity\PreferenceDeContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PreferenceDeContact>
 *
 * @method PreferenceDeContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method PreferenceDeContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method PreferenceDeContact[]    findAll()
 * @method PreferenceDeContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreferenceDeContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PreferenceDeContact::class);
    }

    //    /**
    //     * @return PreferenceDeContact[] Returns an array of PreferenceDeContact objects
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

    //    public function findOneBySomeField($value): ?PreferenceDeContact
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
