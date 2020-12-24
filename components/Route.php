<?php
namespace components;

class Route
{
    public static $listRoutesGet;
    public static $listRoutesPost;
    public static $listRoutesPut;
    public static $listRoutesPatch;
    public static $listRoutesDelete;

    public static function get(string $uri, string $action)
    {
        $uri = trim($uri, '/');
        self::$listRoutesGet[$uri] = $action;
    }
    public static function post(string $uri, string $action)
    {
        $uri = trim($uri, '/');
        self::$listRoutesPost[$uri] = $action;
    }
    public static function put(string $uri, string $action)
    {
        $uri = trim($uri, '/');
        self::$listRoutesPut[$uri] = $action;
    }
    public static function patch(string $uri, string $action)
    {
        $uri = trim($uri, '/');
        self::$listRoutesPatch[$uri] = $action;
    }
    public static function delete(string $uri, string $action)
    {
        $uri = trim($uri, '/');
        self::$listRoutesDelete[$uri] = $action;
    }

    public static function last(string $action)
    {
        self::$listRoutesGet['.*'] = $action;
        self::$listRoutesPost['.*'] = $action;
        self::$listRoutesPut['.*'] = $action;
        self::$listRoutesPatch['.*'] = $action;
        self::$listRoutesDelete['.*'] = $action;
    }

    public static function getRoutesListGet()
    {
        return self::$listRoutesGet;
    }

    public static function getRoutesListPost()
    {
        return self::$listRoutesPost;
    }

    public static function getRoutesListPut()
    {
        return self::$listRoutesPut;
    }

    public static function getRoutesListPatch()
    {
        return self::$listRoutesPatch;
    }

    public static function getRoutesListDelete()
    {
        return self::$listRoutesDelete;
    }

    public static function redirect(string $uri)
    {
        $uri = trim($uri, '/');
        $location = 'Location: /' . $uri;
        header($location);
    }
}