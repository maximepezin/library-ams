<?php
// src/Repository/LibraryAssetRepository.php

namespace App\Repository;

use App\Entity\LibraryAsset;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LibraryAsset|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibraryAsset|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibraryAsset[]    findAll()
 * @method LibraryAsset[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibraryAssetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LibraryAsset::class);
    }
}
