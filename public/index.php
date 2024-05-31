<?php
require __DIR__ . '/../vendor/autoload.php';

use Framework\Database;
use Framework\Router;
use Framework\Session;

Session::start();

require '../helpers.php';


$config = require basePath('config/db.php');

$db = new Database($config);

$router = new Router();
$routes = require '../routes.php';
$routes($router);

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);