<?php
// src/DataFixtures/BranchHourFixtures.php

namespace App\DataFixtures;

use App\Entity\BranchHour;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class BranchHourFixtures extends Fixture implements DependentFixtureInterface
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

        for ($i = 1; $i <= 7; $i++)
        {
            $lakeShoreBranchHour = new BranchHour();
            $lakeShoreBranchHour
                ->setLibraryBranch($lakeShoreBranch)
                ->setDayOfWeek($i)
                ->setOpenTime(
                    new \DateTime('07:00')
                )
                ->setCloseTime(
                    new \DateTime('18:00')
                )
            ;
            if (in_array($i, [1, 7])) {
                $lakeShoreBranchHour->setCloseTime(
                    new \DateTime('14:00')
                );
            }

            $manager->persist($lakeShoreBranchHour);
        }

        for ($i = 1; $i <= 7; $i++)
        {
            $mountainViewBranchHour = new BranchHour();
            $mountainViewBranchHour
                ->setLibraryBranch($mountainViewBranch)
                ->setDayOfWeek($i)
                ->setOpenTime(
                    new \DateTime('06:00')
                )
                ->setCloseTime(
                    new \DateTime('20:00')
                )
            ;

            $manager->persist($mountainViewBranchHour);
        }

        for ($i = 1; $i <= 7; $i++)
        {
            $pleasantHillBranchHour = new BranchHour();
            $pleasantHillBranchHour
                ->setLibraryBranch($pleasantHillBranch)
                ->setDayOfWeek($i)
                ->setOpenTime(
                    new \DateTime('05:00')
                )
                ->setCloseTime(
                    new \DateTime('18:00')
                )
            ;

            if (in_array($i, [1, 6, 7]))
            {
                $pleasantHillBranchHour->setCloseTime(
                    new \DateTime('22:00')
                );
            }

            $manager->persist($pleasantHillBranchHour);
        }

        $manager->flush();
    }

    /**
     * @see DependentFixtureInterface::getDependencies()
     */
    public function getDependencies(): ?array
    {
        return [
            LibraryBranchFixtures::class,
        ];
    }
}
