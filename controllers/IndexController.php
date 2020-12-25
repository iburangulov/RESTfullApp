<?php


namespace controllers;


class IndexController
{
    public function __construct()
    {
    }

    public function home()
    {
        echo 'Home';
    }

    public function page(int $id)
    {
        echo 'Page ' . $id;
    }
}