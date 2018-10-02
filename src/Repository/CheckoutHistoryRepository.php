<?php
// src/Repository/CheckoutHistoryRepository.php

namespace App\Repository;

use App\Entity\CheckoutHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CheckoutHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method CheckoutHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method CheckoutHistory[]    findAll()
 * @method CheckoutHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CheckoutHistoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CheckoutHistory::class);
    }
}
