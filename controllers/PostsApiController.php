<?php

namespace controllers;

use components\Validator;
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
        for ($i = ($page * 10) - 9; $i < ($page * 10) + 1; $i++) {
            $result = $this->Posts->getById($i);
            if ($result) $data[] = $result;
            else continue;
        }
        header('Content-type: application/json');
        echo json_encode($data);
    }

    public function addPost()
    {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $content = $_POST['content'];
        Validator::validate([
            $title => 'title',
            $subtitle => 'subtitle',
            $content => 'content',
        ]);
        if (!isset($_SESSION['validation_errors'])) {
            $result = $this->Posts->create([
                'title' => $title,
                'subtitle' => $subtitle,
                'content' => $content,
            ]);
            if ($result) return true;
            else return false;
        } else return false;
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