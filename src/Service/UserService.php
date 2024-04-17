<?php

namespace App\Service;

use App\Repository\UserRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserService{

    private $userRepo;
    private $chiffreur;

    public function __construct(UserRepository $userRepo, UserPasswordHasherInterface $chiffreur) {
        $this->userRepo = $userRepo;
        $this->chiffreur = $chiffreur;
    }

    public function changeMotDePasse($user, $ancien, $nouveau){
        $userDB = $this->userRepo->find($user->getId());
        // hasher $ancien
        $ancienHashe = $this->chiffreur->hashPassword($user, $ancien);
        // vérifier $ancienHasher = $userDB->getPassword()

        return true;
    }
}