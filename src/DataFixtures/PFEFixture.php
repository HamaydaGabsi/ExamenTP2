<?php

namespace App\DataFixtures;

use App\Entity\Entreprise;
use App\Entity\PFE;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PFEFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
       // $repo = $doctrine->getRepository(Entreprise::class);
        for ($i=0; $i < 100; $i++) {
            $pfe = new PFE();
            $pfe->setTitre("Titre".$i);
            $pfe->setEtudaint($faker->firstName);
           // $pfe->setEntreprise($repo->find(rand(1,99);)
            //j'ai pas trouver comment utilise le repo (instantier $doctrine)
            $pfe->setEntreprise(new Entreprise());
            $manager->persist($pfe);
        }

        $manager->flush();
    }
}
