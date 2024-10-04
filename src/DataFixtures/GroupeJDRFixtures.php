<?php

namespace App\DataFixtures;

use App\Entity\GroupeJDR;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class GroupeJDRFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $owner = new User();
        $owner->setEmail('owner@example.com');
        $owner->setUsername($faker->userName);
        $owner->setPassword($this->passwordHasher->hashPassword($owner, 'password123'));
        $owner->setRoles(['ROLE_USER']);
        $manager->persist($owner);

        for ($i = 0; $i < 100; $i++) {
            $groupeJDR = new GroupeJDR();
            $groupeJDR->setTitle("Groupe JDR n°$i");
            $groupeJDR->setDescription("test test test test");

            $groupeJDR->setPicture('https://via.placeholder.com/640x480.png'); 
            
            $groupeJDR->setCreatedAt($faker->dateTimeBetween('-1 years', 'now'));
            $groupeJDR->setEditAt($faker->dateTimeBetween('-1 years', 'now'));
            $groupeJDR->setMaxPlayer(rand(5, 15));
            $groupeJDR->setOwner($owner);
            $groupeJDR->setStatus($faker->randomElement(['active', 'inactive']));
            $groupeJDR->setRecrutement($faker->boolean());

            for ($j = 0; $j < rand(1, $groupeJDR->getMaxPlayer()); $j++) {
                $player = new User();
                $player->setEmail($faker->email);
                $player->setUsername($faker->userName);
                $player->setPassword($this->passwordHasher->hashPassword($player, 'password123'));
                $player->setRoles(['ROLE_JOUEUR']);
                $manager->persist($player);

                $groupeJDR->addPlayer($player);
            }

            $manager->persist($groupeJDR);
        }

        $manager->flush();
    }
}
