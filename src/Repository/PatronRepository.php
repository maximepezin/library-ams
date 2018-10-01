<?php
// src/Repository/PatronRepository.php

namespace App\Repository;

use App\Entity\Patron;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Patron|null find($id, $lockMode = null, $lockVersion = null)
 * @method Patron|null findOneBy(array $criteria, array $orderBy = null)
 * @method Patron[]    findAll()
 * @method Patron[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatronRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Patron::class);
    }
}
