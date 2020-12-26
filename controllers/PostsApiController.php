<?php

namespace controllers;

use models\PostsApiModel;

class PostsApiController
{
    private $Posts;

    public function __construct()
    {
        $this->Posts = new PostsApiModel('posts');
    }

    public function getPost(int $id = 1)
    {
        $post = $this->Posts->getById($id);
        header('Content-type: application/json');
        echo json_encode($post);
    }

    public function getPosts(int $page)
    {
        $data = array();
        for ($i = ($page * 10) - 9; $i < ($page * 10) + 1; $i++)
        {
            $result =  $this->Posts->getById($i);
            if ($result) $data[] = $result;
            else continue;
        }
        header('Content-type: application/json');
        echo json_encode($data);
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