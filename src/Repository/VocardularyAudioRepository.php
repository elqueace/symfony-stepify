<?php

namespace App\Repository;

use App\Entity\VocardularyAudio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VocardularyAudio|null find($id, $lockMode = null, $lockVersion = null)
 * @method VocardularyAudio|null findOneBy(array $criteria, array $orderBy = null)
 * @method VocardularyAudio[]    findAll()
 * @method VocardularyAudio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VocardularyAudioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VocardularyAudio::class);
    }

    // /**
    //  * @return VocardularyAudio[] Returns an array of VocardularyAudio objects
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
    public function findOneBySomeField($value): ?VocardularyAudio
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
