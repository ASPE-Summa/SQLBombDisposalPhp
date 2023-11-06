<?php

namespace App\Repository;

use App\Entity\MazePuzzle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MazePuzzle>
 *
 * @method MazePuzzle|null find($id, $lockMode = null, $lockVersion = null)
 * @method MazePuzzle|null findOneBy(array $criteria, array $orderBy = null)
 * @method MazePuzzle[]    findAll()
 * @method MazePuzzle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MazePuzzleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MazePuzzle::class);
    }

//    /**
//     * @return MazePuzzle[] Returns an array of MazePuzzle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MazePuzzle
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
