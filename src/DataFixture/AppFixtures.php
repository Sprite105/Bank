<?php

namespace App\DataFixture;

use App\Entity\Customer;
use App\Entity\Transaction;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class AppFixtures extends Fixture
{
    private $encoder;
    private $tokenGenerator;

    public function __construct(UserPasswordEncoderInterface $encoder, TokenGeneratorInterface $tokenGenerator)
    {
        $this->encoder = $encoder;
        $this->tokenGenerator = $tokenGenerator;
    }

    public function load(ObjectManager $manager) {
        $this->loadUsers($manager);
    }

    private function loadUsers(ObjectManager $manager) {
        foreach ($this->getUserData() as $value) {
            $user = new User();
            $user->setUsername($value['username']);
            $user->setEmail($value['email']);
            $user->setPassword($this->encoder->encodePassword($user, $value['password']));
            $user->setToken($this->tokenGenerator->generateToken());
            $manager->persist($user);
        }
        $manager->flush();
    }

    private function getUserData() {
        return [
            ['username' => 'admin', 'password' => '123', 'email' => 'admin@bank.api']
        ];
    }
}