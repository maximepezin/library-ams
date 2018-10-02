<?php
// src/Repository/HoldRepository.php

namespace App\Repository;

use App\Entity\Hold;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Hold|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hold|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hold[]    findAll()
 * @method Hold[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HoldRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Hold::class);
    }
}
