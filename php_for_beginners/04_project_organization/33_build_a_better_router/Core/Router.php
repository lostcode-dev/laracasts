<?php

namespace Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => [],
        'PATCH' => []
    ];

    public function route()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        $method = strtoupper($_POST['_method'] ?? $_SERVER['REQUEST_METHOD']);
        
        if (array_key_exists($uri, $this->routes[$method])) {
            return require base_path($this->routes[$method][$uri]);
        } else {
            $this->abort();
        }
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function put($uri, $controller)
    {
        $this->routes['PUT'][$uri] = $controller;
    }

    public function delete($uri, $controller)
    {
        $this->routes['DELETE'][$uri] = $controller;
    }

    public function patch($uri, $controller)
    {
        $this->routes['PATCH'][$uri] = $controller;
    }

    public function abort($code = '404')
    {
        http_response_code($code);

        require view("{$code}.php");

        die();
    }
}