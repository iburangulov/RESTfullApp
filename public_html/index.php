<?php
session_start();

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once ROOT . 'config.php';

use components\Router;

(new Router)->run();