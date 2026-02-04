<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName("Product One");
        $product->setDescription("The description...");
        $product->setSize(25);
        $manager->persist($product);

        $product = new Product();
        $product->setName("Product two");
        $product->setDescription("The description...");
        $product->setSize(29);
        $manager->persist($product);

        $manager->flush();
    }
}
