<?php

namespace App\Routes;

class Route
{
    protected static $routes = [];
    public static function get($url, $controller, $action)
    {
        $matched = self::match($url);
        if ($matched && $_SERVER['REQUEST_METHOD'] == "GET") {
            self::execute($controller, $action);
        }
    }

    public static function post($url, $controller, $action)
    {
        $matched = self::match($url);
        if ($matched && $_SERVER['REQUEST_METHOD'] == "POST") {
            self::execute($controller, $action);
        }
    }
    public static function match($url)
    {
        $parsed_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($url == $parsed_url) {
            return 1;
        }

        return 0;
    }
    public static function execute($controller, $action)
    {
        $filePath = "./Controllers/" . $controller . ".php";
        if (file_exists($filePath)) {
            include($filePath);
            $controllerClass = "App\\Controllers\\" . $controller .'\\' . $controller;
            $instance = new $controllerClass();
            $instance->{$action}();
        }
    }
}

?>