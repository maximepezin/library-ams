<?php
// src/DataFixtures/LibraryCardFixtures.php

namespace App\DataFixtures;

use App\Entity\LibraryCard;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LibraryCardFixtures extends Fixture
{
    public const PATTERSON_JANE_LIBRARY_CARD_REFERENCE = 'pattersonJaneLibraryCard';
    public const SMITH_MARGARET_LIBRARY_CARD_REFERENCE = 'smithMargaretLibraryCard';
    public const GALLOWAY_THOMAS_LIBRARY_CARD_REFERENCE = 'gallowayThomasLibraryCard';
    public const LI_MARY_LIBRARY_CARD_REFERENCE = 'liMaryLibraryCard';
    public const CARTER_DAN_LIBRARY_CARD_REFERENCE = 'carterDanLibraryCard';
    public const ADHIBAN_ARUNA_LIBRARY_CARD_REFERENCE = 'adhibanArunaLibraryCard';
    public const PRASAD_RAJ_LIBRARY_CARD_REFERENCE = 'prasadRajLibraryCard';
    public const PONOMARYOVA_TATYANA_LIBRARY_CARD_REFERENCE = 'ponomaryovaTatyanLibraryCard';

    public function load(ObjectManager $manager)
    {
        $pattersonJaneLibraryCard = new LibraryCard();
        $pattersonJaneLibraryCard
            ->setFees(12)
            ->setCreated(
                new \DateTime('2017-06-20')
            )
        ;

        $smithMargaretLibraryCard = new LibraryCard();
        $smithMargaretLibraryCard
            ->setFees(0)
            ->setCreated(
                new \DateTime('2017-06-20')
            )
        ;

        $gallowayThomasLibraryCard = new LibraryCard();
        $gallowayThomasLibraryCard
            ->setFees(.5)
            ->setCreated(
                new \DateTime('2017-06-21')
            )
        ;

        $liMaryLibraryCard = new LibraryCard();
        $liMaryLibraryCard
            ->setFees(0)
            ->setCreated(
                new \DateTime('2017-06-21')
            )
        ;

        $carterDanLibraryCard = new LibraryCard();
        $carterDanLibraryCard
            ->setFees(3.5)
            ->setCreated(
                new \DateTime('2017-06-21')
            )
        ;

        $adhibanArunaLibraryCard = new LibraryCard();
        $adhibanArunaLibraryCard
            ->setFees(1.5)
            ->setCreated(
                new \DateTime('2017-06-23')
            )
        ;

        $prasadRajLibraryCard = new LibraryCard();
        $prasadRajLibraryCard
            ->setFees(0)
            ->setCreated(
                new \DateTime('2017-06-23')
            )
        ;

        $ponomaryovaTatyanaLibraryCard = new LibraryCard();
        $ponomaryovaTatyanaLibraryCard
            ->setFees(8)
            ->setCreated(
                new \DateTime('2017-06-23')
            )
        ;

        $manager->persist($pattersonJaneLibraryCard);
        $manager->persist($smithMargaretLibraryCard);
        $manager->persist($gallowayThomasLibraryCard);
        $manager->persist($liMaryLibraryCard);
        $manager->persist($carterDanLibraryCard);
        $manager->persist($adhibanArunaLibraryCard);
        $manager->persist($prasadRajLibraryCard);
        $manager->persist($ponomaryovaTatyanaLibraryCard);

        $manager->flush();

        $this->addReference(self::PATTERSON_JANE_LIBRARY_CARD_REFERENCE, $pattersonJaneLibraryCard);
        $this->addReference(self::SMITH_MARGARET_LIBRARY_CARD_REFERENCE, $smithMargaretLibraryCard);
        $this->addReference(self::GALLOWAY_THOMAS_LIBRARY_CARD_REFERENCE, $gallowayThomasLibraryCard);
        $this->addReference(self::LI_MARY_LIBRARY_CARD_REFERENCE, $liMaryLibraryCard);
        $this->addReference(self::CARTER_DAN_LIBRARY_CARD_REFERENCE, $carterDanLibraryCard);
        $this->addReference(self::ADHIBAN_ARUNA_LIBRARY_CARD_REFERENCE, $adhibanArunaLibraryCard);
        $this->addReference(self::PRASAD_RAJ_LIBRARY_CARD_REFERENCE, $prasadRajLibraryCard);
        $this->addReference(self::PONOMARYOVA_TATYANA_LIBRARY_CARD_REFERENCE, $ponomaryovaTatyanaLibraryCard);
    }
}
