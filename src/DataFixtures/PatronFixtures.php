<?php
// src/DataFixtures/PatronFixtures.php

namespace App\DataFixtures;

use App\Entity\Patron;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class PatronFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $lakeShoreBranch = $this->getReference(
            LibraryBranchFixtures::LAKE_SHORE_BRANCH_REFERENCE
        );
        $mountainViewBranch = $this->getReference(
            LibraryBranchFixtures::MOUNTAIN_VIEW_BRANCH_REFERENCE
        );
        $pleasantHillBranch = $this->getReference(
            LibraryBranchFixtures::PLEASANT_HILL_BRANCH_REFERENCE
        );

        $pattersonJane = new Patron();
        $pattersonJane
            ->setLastName('PATTERSON')
            ->setFirstName('Jane')
            ->setAddress('165 Peace St')
            ->setTelephoneNumber('555-1234')
            ->setBirthDate(
                new \DateTime('1986-07-10')
            )
            ->setHomeLibraryBranch($lakeShoreBranch)
            ->setLibraryCard(
                $this->getReference(LibraryCardFixtures::PATTERSON_JANE_LIBRARY_CARD_REFERENCE)
            )
        ;

        $smithMargaret = new Patron();
        $smithMargaret
            ->setLastName('SMITH')
            ->setFirstName('Margaret')
            ->setAddress('324 Shadow Ln')
            ->setTelephoneNumber('555-7785')
            ->setBirthDate(
                new \DateTime('1984-03-12')
            )
            ->setHomeLibraryBranch($mountainViewBranch)
            ->setLibraryCard(
                $this->getReference(LibraryCardFixtures::SMITH_MARGARET_LIBRARY_CARD_REFERENCE)
            )
        ;

        $gallowayThomas = new Patron();
        $gallowayThomas
            ->setLastName('GALLOWAY')
            ->setFirstName('Thomas')
            ->setAddress('18 Stone Cir')
            ->setTelephoneNumber('555-3467')
            ->setBirthDate(
                new \DateTime('1956-02-10')
            )
            ->setHomeLibraryBranch($mountainViewBranch)
            ->setLibraryCard(
                $this->getReference(LibraryCardFixtures::GALLOWAY_THOMAS_LIBRARY_CARD_REFERENCE)
            )
        ;

        $liMary = new Patron();
        $liMary
            ->setLastName('LI')
            ->setFirstName('Mary')
            ->setAddress('246 Jennifer St')
            ->setTelephoneNumber('555-1223')
            ->setBirthDate(
                new \DateTime('1997-01-17')
            )
            ->setHomeLibraryBranch($pleasantHillBranch)
            ->setLibraryCard(
                $this->getReference(LibraryCardFixtures::LI_MARY_LIBRARY_CARD_REFERENCE)
            )
        ;

        $carterDan = new Patron();
        $carterDan
            ->setLastName('CARTER')
            ->setFirstName('Dan')
            ->setAddress('1465 Williamson St')
            ->setTelephoneNumber('555-8884')
            ->setBirthDate(
                new \DateTime('1952-09-16')
            )
            ->setHomeLibraryBranch($pleasantHillBranch)
            ->setLibraryCard(
                $this->getReference(LibraryCardFixtures::CARTER_DAN_LIBRARY_CARD_REFERENCE)
            )
        ;

        $adhibanAruna = new Patron();
        $adhibanAruna
            ->setLastName('ADHIBAN')
            ->setFirstName('Aruna')
            ->setAddress('785 Park Ave')
            ->setTelephoneNumber('555-9988')
            ->setBirthDate(
                new \DateTime('1994-03-24')
            )
            ->setHomeLibraryBranch($pleasantHillBranch)
            ->setLibraryCard(
                $this->getReference(LibraryCardFixtures::ADHIBAN_ARUNA_LIBRARY_CARD_REFERENCE)
            )
        ;

        $prasadRaj = new Patron();
        $prasadRaj
            ->setLastName('PRASAD')
            ->setFirstName('Raj')
            ->setAddress('5654 Main St')
            ->setTelephoneNumber('555-7894')
            ->setBirthDate(
                new \DateTime('2001-11-23')
            )
            ->setHomeLibraryBranch($lakeShoreBranch)
            ->setLibraryCard(
                $this->getReference(LibraryCardFixtures::PRASAD_RAJ_LIBRARY_CARD_REFERENCE)
            )
        ;

        $ponomaryovaTatyana = new Patron();
        $ponomaryovaTatyana
            ->setLastName('PONOMARYOVA')
            ->setFirstName('Tatyana')
            ->setAddress('1352 Bicycle Ct')
            ->setTelephoneNumber('555-4568')
            ->setBirthDate(
                new \DateTime('1981-10-16')
            )
            ->setHomeLibraryBranch($pleasantHillBranch)
            ->setLibraryCard(
                $this->getReference(LibraryCardFixtures::PONOMARYOVA_TATYANA_LIBRARY_CARD_REFERENCE)
            )
        ;

        $manager->persist($pattersonJane);
        $manager->persist($smithMargaret);
        $manager->persist($gallowayThomas);
        $manager->persist($liMary);
        $manager->persist($carterDan);
        $manager->persist($adhibanAruna);
        $manager->persist($prasadRaj);
        $manager->persist($ponomaryovaTatyana);

        $manager->flush();
    }

    /**
     * @see DependentFixtureInterface::getDependencies()
     */
    public function getDependencies(): ?array
    {
        return [
            LibraryBranchFixtures::class,
            LibraryCardFixtures::class,
        ];
    }
}
