<?php

namespace App\Controller;

class BaseDashboardController{

    public function __construct(){
        if (!isset($_SESSION['isLogin'])) {
            $_SESSION['error'] = 'please login';

            return redirect("/login");
        }
    }
}