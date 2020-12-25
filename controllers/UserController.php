<?php
namespace controllers;

use components\Route;
use models\UserModel;

class UserController
{
    private $User;

    public function __construct()
    {
        $this->User = new UserModel('users');
    }

    public function signin()
    {
        var_dump($_POST);
    }

    public function signup()
    {
        var_dump($_POST);
    }

    public function signout()
    {
        session_destroy();
        Route::redirect('/');
    }

}