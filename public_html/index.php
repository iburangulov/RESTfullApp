<?php
session_start();



define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once ROOT . 'config.php';

//(new components\ErrorHandler())->register();
$session = new components\Session();
(new components\Router)->run();

