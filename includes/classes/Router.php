<?php
class Router{
    private $routeDefinitionCallback;
    public $dispatcher;
    public $httpMethod;
    public $uri;

    public function __construct()
    {
        $routeDefinitionCallback = function (\FastRoute\RouteCollector $r) {
            $routes = include __DIR__.'/../Routes.php';
            foreach ($routes as $route) {
                $r->addRoute($route[0], $route[1], $route[2]);
            }
        };

        $this->dispatcher = \FastRoute\simpleDispatcher($routeDefinitionCallback);
        $this->httpMethod = $this->getHttpMethod();
        $this->uri = $this->getUri();

        if (false !== $pos = strpos($this->uri, '?')) {
            $uri = substr($this->uri, 0, $pos);
        }
        $this->uri = rawurldecode($this->uri);
    }

    public function getHttpMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getUri(){
        return $_SERVER['REQUEST_URI'];
    }

    public function getDispatcher(){
        return $this->dispatcher;
    }

    public function dispatch($method="",$uri=""){
        if($method==""){
            $method = $this->httpMethod;
        }
        if($uri==""){
            $uri = $this->uri;
        }
        return $this->getDispatcher()->dispatch($method,$uri);
    }
}

$router = new Router();