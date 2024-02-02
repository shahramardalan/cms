<?php

namespace App\Controller;

use App\Model\User;

class DashboardController extends BaseDashboardController
{
    public function show()
    {
        $user = User::find($_SESSION['user']);
        return view('dashboard', ['user' => $user]);
    }
}
