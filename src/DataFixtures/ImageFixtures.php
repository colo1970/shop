<?php

namespace App\DataFixtures;

use App\Entity\Image;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class ImageFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) {
        $image1 = new Image();
        $image1->setFilename('f.jpg');
        $image1->setImageFile('test1');
        $image1->setCreatedAt(new DateTime());
        $image1->setUpdatedAt(new DateTime());
        $manager->persist($image1);
        
        $image2 = new Image();
        $image2->setFilename('f.jpg');
        $image2->setImageFile('test2');
        $image2->setCreatedAt(new DateTime());
        $image2->setUpdatedAt(new DateTime());
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setFilename('f.jpg');
        $image3->setImageFile('test2');
        $image3->setCreatedAt(new DateTime());
        $image3->setUpdatedAt(new DateTime());
        $manager->persist($image3);

        $image4 = new Image();
        $image4->setFilename('f.jpg');
        $image4->setImageFile('test2');
        $image4->setCreatedAt(new DateTime());
        $image4->setUpdatedAt(new DateTime());
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setFilename('f.jpg');
        $image5->setImageFile('test2');
        $image5->setCreatedAt(new DateTime());
        $image5->setUpdatedAt(new DateTime());
        $manager->persist($image5);

        $image6 = new Image();
        $image6->setFilename('f.jpg');
        $image6->setImageFile('test2');
        $image6->setCreatedAt(new DateTime());
        $image6->setUpdatedAt(new DateTime());
        $manager->persist($image6);

        $manager->flush();
        /*addReference permet de faire la relation avec d'autres fixtures en donnant un nom à une entité afin d'autres fixtures
          puissent le recuperer:   $this-->getReference('img1')
         */
        
        $this->addReference('img1', $image1); //recup dans autre fixture :  $this-->getReference('img1'):entity img1
        $this->addReference('img2', $image2);
        $this->addReference('img3', $image3);
        $this->addReference('img4', $image4);
        $this->addReference('img5', $image5);
        $this->addReference('img6', $image6);
    }
    // getOrder() indique l'ordre de chargement des fixtures 
    public function getOrder()
    {
        return 1;
    }
}
