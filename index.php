<?php

require_once 'vendor/autoload.php';
require_once 'database.php';

use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */
require_once 'routes.php';

session_start();

SimpleRouter::setDefaultNamespace('App\Controller');

// Start the routing
SimpleRouter::start();

if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

if(isset($_SESSION['success'])){
    unset($_SESSION['success']);
}