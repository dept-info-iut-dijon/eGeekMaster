<?php
require_once 'Controllers/Router/Route.php';

/**
 * Class RouteHomeConnect
 * @package Controllers\Router\Route
 * @author Théo Cornu
 */
class RouteHomeConnect extends Route {
    private LoginController $controller;

    /**
     * RouteAddLogin constructor.
     * @param HomeController $controller
     */
    public function __construct(HomeController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    /**
     * Get method for RouteHomeConnect
     * @param array $params
     * @return mixed
     */
    public function get($params = []) {
        return $this->controller->Connect();
    }

    /**
     * Post method for RouteHomeConnect
     * @param array $params
     */
    public function post($params = []) {
        return $this->controller->Connect();
    }

    /**
     * Action method for RouteHomeConnect
     * @param array $params
     * @param string $method
     * @return mixed
     */
    public function action($params = [], $method = 'GET') {
        return $this->controller->Connect();
    }
}
