<?php
namespace components;

class ErrorHandler
{

    public function register()
    {
        set_error_handler([$this, 'errorHandler']);
    }

    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $this->showError($errno, $errstr, $errfile, $errline);
        return true;
    }

    private function showError($errno, $errstr, $errfile, $errline, $status = 500)
    {
        ob_clean();
        http_response_code($status);
        $title = $status;
        require ROOT . 'views/errors/error.php';
    }
}