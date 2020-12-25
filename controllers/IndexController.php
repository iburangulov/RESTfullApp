<?php
namespace controllers;

class IndexController
{
    public function __construct()
    {
    }

    public function home()
    {

    }

    public function page(int $id)
    {
        echo 'Page ' . $id;
    }
}