<?php

require_once '../vendor/autoload.php';
require_once '../database.php';

use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */
require_once '../routes.php';

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('App\Controller');

// Start the routing
SimpleRouter::start();