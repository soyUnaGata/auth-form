<?php
require '../helpers.php';


$routes = [
    '/' => 'controllers/home.php',
    '/register' => 'controllers/register.php',
    '/login' => 'controllers/login.php',
    '/logout' => 'controllers/logout.php',
    '404' => 'controllers/error/404.php'
];

$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)) {
    require basePath($routes[$uri]);
} else {
    require basePath($routes['404']);
}