<?php
namespace components;

class Session
{
    public function __construct()
    {
        if (isset($_SESSION['current_page']) && isset($_SESSION['prev_page']))
        {
            $_SESSION['prev_page'] = $_SESSION['current_page'];
            $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
        } else {
            $_SESSION['prev_page'] = '/';
            $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
        }
    }
}