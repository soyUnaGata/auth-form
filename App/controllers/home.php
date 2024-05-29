<?php

use Framework\Database;

$config = require basePath('config/db.php');
$db = new Database($config);

loadView('home');