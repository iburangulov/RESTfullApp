<?php

namespace controllers;

use components\Route;
use components\Session;
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
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        Validator::validate([
            $email => 'required|email',
            $password => 'required|password'
        ]);

        if (empty($_SESSION['validation_errors'])) {
            if ($this->User->attempt($email, $password)) {
                Route::redirect('/profile');
            } else {
                Session::setKey('validation_errors', 'Uncorrect email or password');
                Route::back();
            }
        } else Route::back();
    }

    public function signup()
    {
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        Validator::validate([
            $name => 'required|name',
            $email => 'required|email',
            $password => 'required|password|confirmation',
        ]);
        if (empty($_SESSION['validation_errors'])) {
            $res = $this->User->create([
                'name' => $name,
                'email' => $email,
                'password' => md5($password),
            ]);
            if ($res) {
                Session::auth($name, $email, md5($password));
                Route::redirect('/profile');
            } else {
                Session::setKey('validation_errors', 'Error, try again');
                Route::back();
            }


        } else {
            Session::setKey('validation_errors', 'Check your fields');
            Route::back();
        }
    }

    public function signout()
    {
        Session::unauth();
        Route::redirect('/');
    }

}