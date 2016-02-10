<?php
declare(strict_types = 1);

// @todo add namespace

use League\Route\RouteCollection;
use League\Route\Strategy\AbstractStrategy;
use League\Route\Strategy\UriStrategy;

/**
 * Class Router
 */
class Router {
    /**
     * @var RouteCollection
     */
    private $router = null;

    /**
     * Setup the route table.
     *
     * @return RouteCollection
     */
    public function setup() : RouteCollection {
        $this->router = new RouteCollection();
        $this->router->setStrategy(new UriStrategy());

        $this->addRoute('GET', '/', new Index());

        return $this->router;
    }

    /**
     * Create routes conforming to our calling convention.
     *
     * @param string $method
     * @param string $route
     * @param ControllerBase $handler
     * @param AbstractStrategy $strategy
     */
    private function addRoute(
        string $method,
        string $route,
        ControllerBase $handler,
        AbstractStrategy $strategy = null
    ) {
        $handlerStr = get_class($handler) . '::' . ucfirst($method);
        $this->router->addRoute($method, $route, $handlerStr, $strategy);
    }
}
