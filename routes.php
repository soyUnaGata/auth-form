<?php

//return [
//    '/' => 'controllers/home.php',
//    '/register' => 'controllers/register.php',
//    '/login' => 'controllers/login.php',
//    '/logout' => 'controllers/logout.php',
//    '404' => 'controllers/error/404.php'
//];
//$router->get('/', 'controllers/home.php');
//$router->get('/register', 'UserController@register');
//$router->get('/login', 'UserController@login');
//$router->get('/logout', 'controllers/logout.php');


return function ($router) {
    $router->get('/', 'HomeController@index');
    $router->get('/register', 'UserController@register');
    $router->get('/login', 'UserController@login');
    $router->get('/logout', 'LogoutController@perform');
    $router->get('/welcome', 'UserController@welcome');

    $router->post('/register', 'UserController@store');
    $router->post('/login', 'UserController@authenticate');
};