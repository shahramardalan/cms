<?php

use Jenssegers\Blade\Blade;


function view($view, $data = []){
    $blade = new Blade('view', 'cache');

    echo $blade->make($view, $data)->render();
}