<?php

namespace App\Repository;

use App\Entity\SeriesTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SeriesTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method SeriesTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method SeriesTest[]    findAll()
 * @method SeriesTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeriesTestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SeriesTest::class);
    }

//    /**
//     * @return SeriesTest[] Returns an array of SeriesTest objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    public function findOneBySomeField($value): ?SeriesTest
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}
