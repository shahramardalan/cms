<?php

namespace App\Controller;

use App\Model\User;

use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;

class LoginController
{
    public function formLogin()
    {
        if(isset($_SESSION['isLogin'])){
            return redirect('/dashboard');
        }
        return view("login");
    }

    public function submit()
    {
        if (!$_POST['email'] || !$_POST['password']) {
            if (!$_POST['fullName'] || !$_POST['email'] || !$_POST['password']) {
                $_SESSION['error'] = 'please fill form';

                return redirect("/login");
            }
        }

        $find = User::where('username', '=', $_POST['email'])->first();

        if (is_null($find)) {

            $_SESSION['error'] = 'email not found';

            return redirect("/login");
        }

        $factory = new PasswordHasherFactory([
            'common' => ['algorithm' => 'bcrypt'],
            'memory-hard' => ['algorithm' => 'sodium'],
        ]);

        // Retrieve the right password hasher by its name
        $passwordHasher = $factory->getPasswordHasher('common');

        if($passwordHasher->verify($find->password, $_POST['password'])){
            $_SESSION['isLogin'] = true;

            $_SESSION['user'] = $find->id;

            return redirect('/dashboard');

            
        }else{
            $_SESSION['error'] = 'wrong password!';

            return redirect("/login");
        }
    }
}
