<?php

namespace Engine\Core\Router;

/**
 * Class Router
 * @package Engine\Core\Router
 */
/**
 * Class Router
 * @package Engine\Core\Router
 */
class Router
{
    /**
     * @var array
     */
    private $routes = [];
    private $dispatcher;
    /**
     * @var
     */
    private $host;
    /**
     * Router constructor.
     * @param $host
     */
    public function __construct($host)
    {
        $this->host = $host;
    }

    /**
     * @param $key
     * @param $pattern
     * @param $controller
     * @param $method
     */
    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] = [
            'pattern'    => $pattern,
            'controller' => $controller,
            'method'     => $method
        ];
    }

    public function dispatch($method, $uri){

    }

    public function dispatch22($method, $uri){

    }

    public function getDispatcher(){
        if($this->dispatcher == null){

        }

        return $this->dispatcher;
    }
}