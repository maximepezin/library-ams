<?php
// src/Repository/LibraryBranch.php

namespace App\Repository;

use App\Entity\LibraryBranch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LibraryBranch|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibraryBranch|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibraryBranch[]    findAll()
 * @method LibraryBranch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibraryBranchRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LibraryBranch::class);
    }
}
