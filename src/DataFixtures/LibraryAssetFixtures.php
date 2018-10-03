<?php
// src/DataFixtures/LibraryAssetFixtures.php

namespace App\DataFixtures;

use App\Entity\Book;
use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LibraryAssetFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $availableStatus = $this->getReference(
            StatusFixtures::AVAILABLE_REFERENCE
        );

        $lakeShoreBranch = $this->getReference(
            LibraryBranchFixtures::LAKE_SHORE_BRANCH_REFERENCE
        );
        $mountainViewBranch = $this->getReference(
            LibraryBranchFixtures::MOUNTAIN_VIEW_BRANCH_REFERENCE
        );
        $pleasantHillBranch = $this->getReference(
            LibraryBranchFixtures::PLEASANT_HILL_BRANCH_REFERENCE
        );

        $libraryAsset1 = new Book();
        $libraryAsset1
            ->setTitle('Emma')
            ->setPublishedYear(1815)
            ->setCost(18)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($mountainViewBranch)
            ->setAuthor('Jane Austen')
            ->setIsbn('9781519202987')
            ->setDeweyIndex('823.123')
        ;

        $libraryAsset2 = new Book();
        $libraryAsset2
            ->setTitle('Jane Eyre')
            ->setPublishedYear(1847)
            ->setCost(18)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($pleasantHillBranch)
            ->setAuthor('Charlotte Brontë')
            ->setIsbn('9781519133977')
            ->setDeweyIndex('822.133')
        ;

        $libraryAsset3 = new Book();
        $libraryAsset3
            ->setTitle('Moby Dick')
            ->setPublishedYear(1851)
            ->setCost(12.99)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($mountainViewBranch)
            ->setAuthor('Herman Melville')
            ->setIsbn('9780746062760')
            ->setDeweyIndex('821.153')
        ;

        $libraryAsset4 = new Book();
        $libraryAsset4
            ->setTitle('Ulysses')
            ->setPublishedYear(1922)
            ->setCost(24)
            ->setNumberOfCopies(3)
            ->setStatus($availableStatus)
            ->setLocation($mountainViewBranch)
            ->setAuthor('James Joyce')
            ->setIsbn('9788854139343')
            ->setDeweyIndex('822.556')
        ;

        $libraryAsset5 = new Book();
        $libraryAsset5
            ->setTitle('Republic')
            ->setPublishedYear(-380)
            ->setCost(11)
            ->setNumberOfCopies(2)
            ->setStatus($availableStatus)
            ->setLocation($pleasantHillBranch)
            ->setAuthor('Plato')
            ->setIsbn('9780758320209')
            ->setDeweyIndex('820.119')
        ;

        $libraryAsset6 = new Book();
        $libraryAsset6
            ->setTitle('Dracula')
            ->setPublishedYear(1897)
            ->setCost(18)
            ->setNumberOfCopies(4)
            ->setStatus($availableStatus)
            ->setLocation($pleasantHillBranch)
            ->setAuthor('Bram Stoker')
            ->setIsbn('9781623750282')
            ->setDeweyIndex('821.526')
        ;

        $libraryAsset7 = new Book();
        $libraryAsset7
            ->setTitle('White Noise')
            ->setPublishedYear(1985)
            ->setCost(12.99)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($mountainViewBranch)
            ->setAuthor('Don Delillo')
            ->setIsbn('9780670803736')
            ->setDeweyIndex('822.436')
        ;

        $libraryAsset8 = new Book();
        $libraryAsset8
            ->setTitle('Another Country')
            ->setPublishedYear(1962)
            ->setCost(16)
            ->setNumberOfCopies(2)
            ->setStatus($availableStatus)
            ->setLocation($mountainViewBranch)
            ->setAuthor('James Baldwin')
            ->setIsbn('9780552084574')
            ->setDeweyIndex('821.325')
        ;

        $libraryAsset9 = new Book();
        $libraryAsset9
            ->setTitle('The Waves')
            ->setPublishedYear(1931)
            ->setCost(11)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($lakeShoreBranch)
            ->setAuthor('Virginia Woolf')
            ->setIsbn('9781904919582')
            ->setDeweyIndex('822.888')
        ;

        $libraryAsset10 = new Book();
        $libraryAsset10
            ->setTitle('The Color Purple')
            ->setPublishedYear(1982)
            ->setCost(11.99)
            ->setNumberOfCopies(2)
            ->setStatus($availableStatus)
            ->setLocation($lakeShoreBranch)
            ->setAuthor('Alice Walker')
            ->setIsbn('9780151191543')
            ->setDeweyIndex('820.298')
        ;

        $libraryAsset11 = new Book();
        $libraryAsset11
            ->setTitle('One Hundred Years of Solitude')
            ->setPublishedYear(1967)
            ->setCost(12.5)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($lakeShoreBranch)
            ->setAuthor('Gabriel García Márquez')
            ->setIsbn('9789631420494')
            ->setDeweyIndex('821.544')
        ;

        $libraryAsset12 = new Book();
        $libraryAsset12
            ->setTitle('Friend of My Youth')
            ->setPublishedYear(1990)
            ->setCost(22)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($lakeShoreBranch)
            ->setAuthor('Alice Monroe')
            ->setIsbn('9788702163452')
            ->setDeweyIndex('821.444')
        ;

        $libraryAsset13 = new Book();
        $libraryAsset13
            ->setTitle('To the Lighthouse')
            ->setPublishedYear(1927)
            ->setCost(13.5)
            ->setNumberOfCopies(5)
            ->setStatus($availableStatus)
            ->setLocation($lakeShoreBranch)
            ->setAuthor('Virginia Woolf')
            ->setIsbn('9780795310522')
            ->setDeweyIndex('820.111')
        ;

        $libraryAsset14 = new Book();
        $libraryAsset14
            ->setTitle('Mrs Dalloway')
            ->setPublishedYear(1925)
            ->setCost(15.99)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($pleasantHillBranch)
            ->setAuthor('Virginia Woolf')
            ->setIsbn('9785457626126')
            ->setDeweyIndex('821.254')
        ;

        $libraryAsset15 = new Video();
        $libraryAsset15
            ->setTitle('Blue Velvet')
            ->setPublishedYear(1986)
            ->setCost(24)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($lakeShoreBranch)
            ->setDirector('David Lynch')
        ;

        $libraryAsset16 = new Video();
        $libraryAsset16
            ->setTitle('Trois Couleurs: Rouge')
            ->setPublishedYear(1994)
            ->setCost(24)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($lakeShoreBranch)
            ->setDirector('Krzysztof Kieslowski')
        ;

        $libraryAsset17 = new Video();
        $libraryAsset17
            ->setTitle('Citizen Kane')
            ->setPublishedYear(1941)
            ->setCost(30)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($lakeShoreBranch)
            ->setDirector('Orson Welles')
        ;

        $libraryAsset18 = new Video();
        $libraryAsset18
            ->setTitle('Spirited Away')
            ->setPublishedYear(2002)
            ->setCost(28)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($mountainViewBranch)
            ->setDirector('Hayao Miyazaki')
        ;

        $libraryAsset19 = new Video();
        $libraryAsset19
            ->setTitle('The Departed')
            ->setPublishedYear(2006)
            ->setCost(23)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($mountainViewBranch)
            ->setDirector('Martin Scorsese')
        ;

        $libraryAsset20 = new Video();
        $libraryAsset20
            ->setTitle('Taxi Driver')
            ->setPublishedYear(1976)
            ->setCost(17.99)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($mountainViewBranch)
            ->setDirector('Martin Scorsese')
        ;

        $libraryAsset21 = new Video();
        $libraryAsset21
            ->setTitle('Casablanca')
            ->setPublishedYear(1943)
            ->setCost(18)
            ->setNumberOfCopies(1)
            ->setStatus($availableStatus)
            ->setLocation($pleasantHillBranch)
            ->setDirector('Michael Curtiz')
        ;

        $manager->persist($libraryAsset1);
        $manager->persist($libraryAsset2);
        $manager->persist($libraryAsset3);
        $manager->persist($libraryAsset4);
        $manager->persist($libraryAsset5);
        $manager->persist($libraryAsset6);
        $manager->persist($libraryAsset7);
        $manager->persist($libraryAsset8);
        $manager->persist($libraryAsset9);
        $manager->persist($libraryAsset10);
        $manager->persist($libraryAsset11);
        $manager->persist($libraryAsset12);
        $manager->persist($libraryAsset13);
        $manager->persist($libraryAsset14);
        $manager->persist($libraryAsset15);
        $manager->persist($libraryAsset16);
        $manager->persist($libraryAsset17);
        $manager->persist($libraryAsset18);
        $manager->persist($libraryAsset19);
        $manager->persist($libraryAsset20);
        $manager->persist($libraryAsset21);

        $manager->flush();
    }

    /**
     * @see DependentFixtureInterface::getDependencies()
     */
    public function getDependencies(): array
    {
        return [
            StatusFixtures::class,
            LibraryBranchFixtures::class,
        ];
    }
}
