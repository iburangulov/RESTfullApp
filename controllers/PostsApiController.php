<?php

namespace controllers;


use components\DB;

class PostsApiController
{
    public function getPost(int $id = 1)
    {
        echo 'Post 1';
    }

    public function getPosts(int $page)
    {
        echo 'From ' . (($page * 10) - 9) . ' to ' . ($page * 10);
    }

    public function addPost()
    {
    }

    public function updatePost(int $id)
    {
        echo 'Put' . $id;
    }

    public function deletePost(int $id)
    {
        echo 'Delete ' . $id;
    }
}