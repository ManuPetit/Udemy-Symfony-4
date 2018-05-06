<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 06/05/2018
 * Time: 12:14
 */

namespace App\Security;


use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;

class ExampleVoter implements VoterInterface
{

    public function vote(TokenInterface $token, $subject, array $attributes)
    {
        // TODO: Implement vote() method.
    }
}