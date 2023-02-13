<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class CategoriesFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categories();
        $categorie1
            ->setNom('Fruit')
            ->setCreatedAt(new DateTime())
        ;
        $manager->persist($categorie1);

        $categorie2 = new Categories();
        $categorie2
            ->setNom('Légume')
            ->setCreatedAt(new DateTime())
        ;
        $manager->persist($categorie2);
        $manager->flush();

        $this->addReference('categorie1', $categorie1);
        $this->addReference('categorie2', $categorie2);
    }

    public function getOrder() {
        return 2;
    }
}
