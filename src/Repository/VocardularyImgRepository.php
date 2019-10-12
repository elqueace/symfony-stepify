<?php

namespace App\Repository;

use App\Entity\VocardularyImg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VocardularyImg|null find($id, $lockMode = null, $lockVersion = null)
 * @method VocardularyImg|null findOneBy(array $criteria, array $orderBy = null)
 * @method VocardularyImg[]    findAll()
 * @method VocardularyImg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VocardularyImgRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VocardularyImg::class);
    }

    // /**
    //  * @return VocardularyImg[] Returns an array of VocardularyImg objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VocardularyImg
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
