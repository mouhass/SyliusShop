<?php

namespace App\Repository;

use App\Entity\Author;
use App\Entity\Book;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Sylius\Component\Resource\Repository\RepositoryInterface;

/**
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookRepository extends EntityRepository implements RepositoryInterface
{
//    private $entityManager;
//    private $repository;
//    public function __construct(EntityManagerInterface $entityManager)
//    {
//        $this->entityManager = $entityManager;
//        $this->repository = $this->entityManager->getRepository(Book::class);
//    }
     /**
      * @return Book[] Returns an array of Book objects
      */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.id = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }



    public function findOneBySomeField($value): ?Book
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

//    public function myAuthorGridQuery(Author $author ){
//        return $this->createQueryBuilder('p')
//                    ->andWhere('p.writtenBy == :aid')
//                    ->orderBy('p.writtenBy', 'ASC')
//                    ->setParameter('aid',$author->getId())
//            ;
//
//
//    }
      public function myAuthorGridQuery(){
        return $this->createQueryBuilder('p')
            ->orderBy('p.writtenBy','ASC')
            ;
      }




}
