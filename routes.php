<?php

use App\Controller\PageController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controller\RegisterController;

require_once 'helper.php';

SimpleRouter::get('/', function() {
    return 'Hello world';
});

SimpleRouter::get('/register', function() {
    return view('register');
});
/* SimpleRouter::post('/register', function() {
    RegisterController::createAccount();
}); */

SimpleRouter::post('/register', 'RegisterController@createAccount');

SimpleRouter::get('/pages/create', function() {
    return view('pages.create');
});
SimpleRouter::post('/pages/create', 'PageController@createPage');

SimpleRouter::get('/pages/about', 'PageController@renderAbout');

SimpleRouter::get('/pages/edit/{id}', 'PageController@edit');
SimpleRouter::Post('/pages/edit/{id}', 'PageController@update');

SimpleRouter::get('/pages/delete/{id}', 'PageController@deletePage');