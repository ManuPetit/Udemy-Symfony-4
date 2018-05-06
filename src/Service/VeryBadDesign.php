<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 06/05/2018
 * Time: 12:18
 */

namespace App\Service;


use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class VeryBadDesign implements ContainerAwareInterface
{

    /**
     * @required
     */
    public function setContainer(ContainerInterface $container = null)
    {
        //$container->get(Greeting::class);
    }
}