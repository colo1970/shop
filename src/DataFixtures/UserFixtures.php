<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture implements OrderedFixtureInterface
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setEmail('o.daffe@yahoo.fr');
        $user1->setNom('Daffe');
        $user1->setPrenom('Ousmane');
        $user1->setTelephone('0600000000');
        $password = $this->encoder->hashPassword($user1, 'dev');
        $user1->setPassword($password);
        $manager->persist($user1);

        $user2= new User();
        $user2->setNom('Frederick');
        $user2->setPrenom('Dupont');
        $user2->setEmail('o.daffe@laposte.net');
        $user2->setTelephone('0600000000');
        $password = $this->encoder->hashPassword($user2, 'dev');
        $user2->setPassword($password);
        $manager->persist($user2);

        $manager->flush();

        $this->addReference('user1', $user1);
        $this->addReference('user2', $user2);
    }
    public function getOrder()
    {
        return 4;
    }
}
