<?php
namespace controllers;

use components\DB;
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
        $pdo = DB::getPDO();
    }

    public function signup()
    {

    }

    public function signout()
    {
        session_destroy();
        Route::redirect('/');
    }

}