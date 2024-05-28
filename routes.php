<?php

//return [
//    '/' => 'controllers/home.php',
//    '/register' => 'controllers/register.php',
//    '/login' => 'controllers/login.php',
//    '/logout' => 'controllers/logout.php',
//    '404' => 'controllers/error/404.php'
//];


$router->get('/', 'controllers/home.php');
$router->get('/register', 'controllers/register.php');
$router->get('/login', 'controllers/login.php');
$router->get('/logout', 'controllers/logout.php');