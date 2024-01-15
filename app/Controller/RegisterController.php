<?php

namespace App\Controller;

use App\Model\User;

use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;


class RegisterController
{
    public function createAccount()
    {
        $factory = new PasswordHasherFactory([
            'common' => ['algorithm' => 'bcrypt'],
            'memory-hard' => ['algorithm' => 'sodium'],
        ]);
        
        // Retrieve the right password hasher by its name
        $passwordHasher = $factory->getPasswordHasher('common');
        
        // Hash a plain password
        $hash = $passwordHasher->hash($_POST['password']); // returns a bcrypt hash
        $user = new User();

        $user->name = $_POST['fullName'];
        $user->username = $_POST['email'];
        $user->password = $hash;

        $user->save();
    }
}

// Configure different password hashers via the factory
