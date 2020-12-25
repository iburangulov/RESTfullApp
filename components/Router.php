<?php

namespace components;

class Router
{
    private $uri;
    private $routesList;

    public function __construct()
    {
        $this->uri = htmlspecialchars(trim($_SERVER['REQUEST_URI'], '/'));
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $this->routesList = Route::getRoutesListGet();
                break;
            case 'POST':
                $this->routesList = Route::getRoutesListPost();
                break;
            case 'PUT':
                $this->routesList = Route::getRoutesListPut();
                break;
            case 'PATCH':
                $this->routesList = Route::getRoutesListPatch();
                break;
            case 'DELETE':
                $this->routesList = Route::getRoutesListDelete();
                break;
        }
    }

    public function run()
    {
        foreach ($this->routesList as $pattern => $road)
        {
            $pattern = '#^' . $pattern . '$#';
            if (preg_match($pattern, $this->uri))
            {
                $roadModified = preg_replace($pattern, $road, $this->uri);
                $data = explode('/', $roadModified);
                $controllerName = CONTROLLERS_NAMESPACE . array_shift($data);
                $actionName = array_shift($data);
                call_user_func_array([$controllerName, $actionName], $data);
                break;
            }
        }
    }
}