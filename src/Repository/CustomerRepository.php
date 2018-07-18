<?php

namespace App\Repository;


use App\Entity\Customer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CustomerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, Customer::class);
    }

    public function findByFilter($name, $offset = 0, $limit = 10) {
        $offset       = is_null($offset) ? 0 : $offset;
        $limit        = is_null($limit) ? 10 : $limit;
        $queryBuilder = $this->createQueryBuilder('t');

        if (!is_null($name)) {
            $queryBuilder->andWhere('t.name = :name')
                ->setParameter('name', $name);
        }

        return $queryBuilder->orderBy('t.id', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}