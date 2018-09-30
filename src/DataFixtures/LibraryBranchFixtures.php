<?php
// src/DataFixtures/LibraryBranchFixtures.php

namespace App\DataFixtures;

use App\Entity\LibraryBranch;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LibraryBranchFixtures extends Fixture
{
    public const LAKE_SHORE_BRANCH_REFERENCE = 'lakeShoreBranch';
    public const MOUNTAIN_VIEW_BRANCH_REFERENCE = 'mountainViewBranch';
    public const PLEASANT_HILL_BRANCH_REFERENCE = 'pleasantHillBranch';

    public function load(ObjectManager $manager)
    {
        $lakeShoreBranch = new LibraryBranch();
        $lakeShoreBranch
            ->setName('Lake Shore Branch')
            ->setDescription(
'The oldest library branch in Lakeview, the Lake Shore Branch was opened in 1975.
Patrons of all ages enjoy the wide selection of literature available at Lake Shore library.
The coffee shop is open during library hours of operation.'
            )
            ->setAddress('88 Lakeshore Dr')
            ->setTelephoneNumber('555-1234')
            ->setOpenDate(
                new \DateTime('1975-05-13')
            )
        ;

        $mountainViewBranch = new LibraryBranch();
        $mountainViewBranch
            ->setName('Mountain View Branch')
            ->setDescription(
'The Mountain View branch contains the largest collection of technical and language learning books in the region.
This branch is within walking distance to the University campus.'
            )
            ->setAddress('123 Skyline Dr')
            ->setTelephoneNumber('555-1235')
            ->setOpenDate(
                new \DateTime('1998-06-01')
            )
        ;

        $pleasantHillBranch = new LibraryBranch();
        $pleasantHillBranch
            ->setName('Pleasant Hill Branch')
            ->setDescription(
'The newest Lakeview Library System branch.
Pleasant Hill has high-speed wireless access for all patrons and hosts Chess Club every Monday and Wednesday evening at 6 PM.'
            )
            ->setAddress('540 Inventors Circle')
            ->setTelephoneNumber('555-1236')
            ->setOpenDate(
                new \DateTime('2017-09-20')
            )
        ;

        $manager->persist($lakeShoreBranch);
        $manager->persist($mountainViewBranch);
        $manager->persist($pleasantHillBranch);

        $manager->flush();

        $this->addReference(self::LAKE_SHORE_BRANCH_REFERENCE, $lakeShoreBranch);
        $this->addReference(self::MOUNTAIN_VIEW_BRANCH_REFERENCE, $mountainViewBranch);
        $this->addReference(self::PLEASANT_HILL_BRANCH_REFERENCE, $pleasantHillBranch);
    }
}
