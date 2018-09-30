<?php
// src/Repository/BranchHourRepository.php

namespace App\Repository;

use App\Entity\BranchHour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BranchHour|null find($id, $lockMode = null, $lockVersion = null)
 * @method BranchHour|null findOneBy(array $criteria, array $orderBy = null)
 * @method BranchHour[]    findAll()
 * @method BranchHour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BranchHourRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BranchHour::class);
    }
}
