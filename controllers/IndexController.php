<?php
namespace controllers;

use components\Route;
use components\Session;

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
        if (Session::authCheck()) Route::redirect('/profile');
        $title = 'Sign In';
        require ROOT . 'views/signin.php';
    }

    public function signup()
    {
        if (Session::authCheck()) Route::redirect('/profile');
        $title = 'Sign Up';
        require ROOT . 'views/signup.php';
    }

    public function profile()
    {
        if (!Session::authCheck()) Route::redirect('/signin');
        $title = 'Your profile';
        require ROOT . 'views/profile.php';
    }

    public function __destruct()
    {
        Session::unsetKey('validation_errors');
    }
}