<?php
require_once 'Controllers/Router/Route.php';

/**
 * Class RouteHomeRegistration
 * @package Controllers\Router\Route
 * @author Théo Cornu
 */
class RouteHomeRegistration extends Route {
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
     * Get method for RouteHomeRegistration
     * @param array $params
     * @return mixed
     */
    public function get($params = []) {
        return $this->controller->Registration();
    }

    /**
     * Post method for RouteHomeRegistration
     * @param array $params
     */
    public function post($params = []) {
        return $this->controller->Registration();
    }

    /**
     * Action method for RouteHomeRegistration
     * @param array $params
     * @param string $method
     * @return mixed
     */
    public function action($params = [], $method = 'GET') {
        return $this->controller->Registration();
    }
}
