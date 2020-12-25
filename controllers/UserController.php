<?php
namespace controllers;

use models\UserModel;

class UserController
{
    private $User;

    public function __construct()
    {
        $this->User = new UserModel('users');
    }

}