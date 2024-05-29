<?php

namespace App\controllers;

use Framework\Database;

class UserController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function login()
    {
        loadView('login');
    }

    public function register()
    {
        loadView('register');
    }
}