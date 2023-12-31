<?php

namespace App\Routes;
use App\Requests\Request;
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
        // Check for dynamic segments
        $urlSegments = explode('/', $url);
        $parsedUrlSegments = explode('/', $parsed_url);
        if (count($urlSegments) !== count($parsedUrlSegments)) {
            return 0;
        }
        // echo json_encode($parsedUrlSegments);
        for ($i = 0; $i < count($urlSegments); $i++) {
            if ($urlSegments[$i] !== $parsedUrlSegments[$i]) {
                if (strpos($urlSegments[$i], '{') !== false) {
                    $paramName = trim($urlSegments[$i], '{}');
                    $_GET[$paramName] = $parsedUrlSegments[$i];
                } else {
                    return 0;
                }
            }
        }
        return 1;
    }
    public static function execute($controller, $action)
    {
        $filePath = "./Controllers/" . $controller . ".php";
        if (file_exists($filePath)) {
            include($filePath);
            $controllerClass = "App\\Controllers\\" . $controller . '\\' . $controller;
            $instance = new $controllerClass();
            $request = new Request();
            $instance->{$action}($request);
        }
    }
}

?>