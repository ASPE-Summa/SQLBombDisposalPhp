<?php

namespace App\Repository;

use App\Entity\ButtonVoltage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ButtonVoltage>
 *
 * @method ButtonVoltage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ButtonVoltage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ButtonVoltage[]    findAll()
 * @method ButtonVoltage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ButtonVoltageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ButtonVoltage::class);
    }

//    /**
//     * @return ButtonVoltage[] Returns an array of ButtonVoltage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ButtonVoltage
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
