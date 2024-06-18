<?php

class App
{
    protected object | string $controller = 'Home';
    protected $method = 'index';
    protected array $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        // Setup Controller
        if (file_exists('app/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require 'app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Setup Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Setup Params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Run controller and method with params if not an empty
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        } else {
            $url = [$this->controller];
            return $url;
        }
    }
}
