<?php
// src/DataFixtures/StatusFixtures.php

namespace App\DataFixtures;

use App\Entity\Status;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StatusFixtures extends Fixture
{
    public const AVAILABLE_REFERENCE = 'available';
    public const CHECKED_OUT_REFERENCE = 'checkedOut';
    public const LOST_REFERENCE = 'lost';
    public const ON_HOLD_REFERENCE = 'onHold';

    public function load(ObjectManager $manager)
    {
        $available = new Status();
        $available
            ->setLabel('Available')
            ->setDescription('A library asset that is available for loan')
        ;

        $checkedOut = new Status();
        $checkedOut
            ->setLabel('Checked Out')
            ->setDescription('A library asset that has been checked out')
        ;

        $lost = new Status();
        $lost
            ->setLabel('Lost')
            ->setDescription('A library asset that has been lost')
        ;

        $onHold = new Status();
        $onHold
            ->setLabel('On Hold')
            ->setDescription('A library asset that has been placed on hold for loan')
        ;

        $manager->persist($available);
        $manager->persist($checkedOut);
        $manager->persist($lost);
        $manager->persist($onHold);

        $manager->flush();

        $this->addReference(self::AVAILABLE_REFERENCE, $available);
        $this->addReference(self::CHECKED_OUT_REFERENCE, $checkedOut);
        $this->addReference(self::LOST_REFERENCE, $lost);
        $this->addReference(self::ON_HOLD_REFERENCE, $onHold);
    }
}
