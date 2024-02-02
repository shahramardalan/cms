<?php

namespace App\Controller;

use App\Model\User;

use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;


class RegisterController extends BaseDashboardController
{
    public function formRegister(){
        if(isset($_SESSION['isLogin'])){
            return redirect('/dashboard');
        }

        return view('register');
    }
    public function createAccount()
    {
        if(!$_POST['fullName'] || !$_POST['email'] || !$_POST['password']){
            $_SESSION['error'] = 'please fill form';

            return redirect("/register");
        }

        $check = User::where('username', '=', $_POST['email'])->first();

        if($check){
            $_SESSION['error'] = 'this user alrady exist';

            return redirect("/register");
        }

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

        $_SESSION['success'] = 'Welcome ' . $_POST['fullName'];

        return redirect("/register");
    }
}