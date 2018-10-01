<?php
// src/Repository/LibraryCardRepository.php

namespace App\Repository;

use App\Entity\LibraryCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LibraryCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibraryCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibraryCard[]    findAll()
 * @method LibraryCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibraryCardRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LibraryCard::class);
    }
}
