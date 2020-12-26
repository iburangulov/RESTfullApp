<?php
namespace controllers;

use components\Route;
use components\Validator;
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
        $email = $_POST['email'];
        $password = $_POST['password'];
        Validator::validate([
            $email => 'required|email',
            $password => 'required|password'
        ]);
        if (empty($_SESSION['validation_errors']))
        {
            $result = $this->User->attempt($email, $password);
        } else Route::back();
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