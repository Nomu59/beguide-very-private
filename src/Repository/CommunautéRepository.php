<?php

namespace App\Repository;

use App\Entity\Communauté;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Communauté>
 *
 * @method Communauté|null find($id, $lockMode = null, $lockVersion = null)
 * @method Communauté|null findOneBy(array $criteria, array $orderBy = null)
 * @method Communauté[]    findAll()
 * @method Communauté[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommunautéRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Communauté::class);
    }

//    /**
//     * @return Communauté[] Returns an array of Communauté objects
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

//    public function findOneBySomeField($value): ?Communauté
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
