<?php
namespace controllers;

class IndexController
{
    public function __construct()
    {
    }

    public function home()
    {
        $title = 'Home';
        require ROOT . 'views/home.php';
    }

    public function signin()
    {
        $title = 'Sign In';
        require ROOT . 'views/signin.php';
    }

    public function signup()
    {
        $title = 'Sign Up';
        require ROOT . 'views/signup.php';
    }

    public function __destruct()
    {
        unset($_SESSION['validation_errors']);
    }
}