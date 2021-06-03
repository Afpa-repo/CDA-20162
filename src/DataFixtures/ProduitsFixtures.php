<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Produit;

class ProduitsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i =1; $i>=10; $i++){
            $Produit = new Produit();
            $Produit->setnom("Nom produit numéro $i")
                    ->setdescription("description du produit numero $i")
                    ->setprix("$i €")
                    ->setgarantie("Garantie $i ans")
                    ->setphoto("photo du $i e produit")
                    ->setqteStock("il reste $i en stock")
                    ->setestEnVente("$i")
                    ->setidFournisseur("id fournisseur: $i");
            $manager->persist($Produit);
        }

        $manager->flush();
    }
}
