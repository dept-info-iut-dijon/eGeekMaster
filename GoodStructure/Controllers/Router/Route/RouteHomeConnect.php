<?php
require_once 'Controllers/Router/Route.php';

/**
 * Class RouteHomeConnect
 * @package Controllers\Router\Route
 * @author Théo Cornu
 */
class RouteHomeConnect extends Route {
    private MyHomeController $controller;

    /**
     * RouteAddLogin constructor.
     * @param MyHomeController $controller
     */
    public function __construct(MyHomeController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    /**
     * Get method for RouteHomeConnect
     * @param array $params
     * @return mixed
     */
    public function get($params = []) {
        return $this->controller->AddUserToHome();
    }

    /**
     * Post method for RouteHomeConnect
     * @param array $params
     */
    public function post($params = []) {
        return $this->controller->AddUserToHome();
    }

    /**
     * Action method for RouteHomeConnect
     * @param array $params
     * @param string $method
     * @return mixed
     */
    public function action($params = [], $method = 'GET') {
        return $this->controller->AddUserToHome();
    }
}
