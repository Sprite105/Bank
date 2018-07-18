<?php

namespace App\Repository;

use App\Entity\Transaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Psr\Log\LoggerInterface;

class TransactionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, Transaction::class);
    }

    public function findByFilter( $customerId, $amount, $date, $offset = 0, $limit = 10 ) {
        $offset = is_null($offset) ? 0 : $offset;
        $limit  = is_null($limit) ? 10 : $limit;

        $queryBuilder = $this->createQueryBuilder('t');
        
        if (!is_null($customerId)) {
            $queryBuilder->andWhere('t.customer = :customer')
                ->setParameter('customer', $customerId);
        }
        if (!is_null($amount)) {
            $queryBuilder->andWhere('t.amount = :amount')
                ->setParameter('amount', $amount);
        }
        if (!is_null($date)) {
            $queryBuilder->andWhere('t.date = :date')
                ->setParameter('date', $date);
        }
        return $queryBuilder->orderBy('t.id', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function summary($date = null) {
        if (!$date) {
            $date = new \DateTime();
        }

        return $this->createQueryBuilder('t')
            ->andWhere('t.date = :date')
            ->setParameter('date', $date->format('Y-m-d'))
            ->select('SUM(t.amount) as summary')
            ->getQuery()
            ->getOneOrNullResult();
    }
}