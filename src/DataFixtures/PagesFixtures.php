<?php

namespace App\DataFixtures;

use App\Entity\Pages;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PagesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $page1 = new Pages();
        $page1->setTitre('QUI SOMMES-NOUS ?')
              ->setContenu("Créée en 2016, ...")
              ->setCreatedAt(new DateTime())
              ->setUpdatedAt(new DateTime());;
        $manager->persist($page1);
        $page2 = new Pages();
        $page2->setTitre('MENTIONS LÉGALES')
              ->setContenu("Créée en 2016, ...")
              ->setCreatedAt(new DateTime())
              ->setUpdatedAt(new DateTime());
        $manager->persist($page2);

        $manager->flush();
    }
}
