<?php

namespace components;

class Session
{
    public function __construct()
    {
        if (isset($_SESSION['current_page']) && isset($_SESSION['prev_page'])) {
            $_SESSION['prev_page'] = $_SESSION['current_page'];
            $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
        } else {
            $_SESSION['prev_page'] = '/';
            $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
        }
    }

    public static function auth($name, $email, $password)
    {
        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['email'] = $email;
        $_SESSION['user']['password'] = $password;
    }

    public static function unauth()
    {
        unset($_SESSION['user']);
    }

    public static function authCheck()
    {
        if (isset($_SESSION['user']['name']) && isset($_SESSION['user']['email']) && isset($_SESSION['user']['password'])) {
            return true;
        } else return false;
    }

    public static function setKey(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function unsetKey(string $key)
    {
        if (isset($_SESSION[$key])) unset($_SESSION[$key]);
    }
}