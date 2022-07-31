<?php

namespace App\Repository;

use App\Entity\Gare;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Gare>
 *
 * @method Gare|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gare|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gare[]    findAll()
 * @method Gare[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GareRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gare::class);
    }

    public function add(Gare $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Gare $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     *
     * @return array
     */
    public function findAllGage()
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('distinct u.resCom')
            ->from($this->_entityName, 'u');
                        
        return $qb->getQuery()->getResult();
        

                            
        
    }

//    /**
//     * @return Gare[] Returns an array of Gare objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Gare
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
