<?php

namespace App\controllers;

use Framework\Database;
use Framework\Validation;

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

    public function store()
    {
        echo "Entering store method<br>";
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];

        $errors = array();

        if (!Validation::string($username, 1, 50)) {
            $errors['username'] = 'Username is invalid';
        }
        if (!Validation::email($email)) {
            $errors['email'] = 'Email is invalid';
        }

        if (!empty($errors)) {
            error_log(print_r($errors, true));
            loadView('register', ['errors' => $errors,
                'user' => [
                    'username' => $username,
                    'email' => $email,
                ]]);
            exit;
        }
    }
}