<?php

namespace App\Manager;
use App\Entity\User;

class UserManager
{
    public function save(User $user): User
    {
        return $user;
    }
}