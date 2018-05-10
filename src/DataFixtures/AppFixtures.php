<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 08/05/2018
 * Time: 16:25
 */

namespace App\DataFixtures;


use App\Entity\MicroPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $micropost = new MicroPost();
            $micropost->setText('Some random text ' . rand(0,100));
            $micropost->setTime(new \DateTime('2018-05-08'));
            $manager->persist($micropost);
        }
        $manager->flush();
    }
}