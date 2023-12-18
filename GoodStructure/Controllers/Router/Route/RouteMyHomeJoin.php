<?php
require_once 'Controllers/Router/Route.php';
require_once 'Controllers/MyHomeController.php';

/**
 * Class RouteMyHomeRegistration
 * @package Controllers\Router\Route
 * @author Théo Cornu
 */
class RouteMyHomeJoin extends Route {
    private MainController $controller;

    /**
     * RouteMyHome constructor.
     * @param MyHomeController $controller
     */
    public function __construct(MyHomeController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    /**
     * Handle GET request for MyHome route
     * @param array $params
     * @return mixed
     */
    public function get($params = []) {
        return $this->controller->AddUser();
    }

    /**
     * Handle POST request for MyHome route
     * @param array $params
     * @return mixed
     */
    public function post($params = []) {
        return $this->controller->AddUser();
    }

    /**
     * Handle action request for MyHome route
     * @param array $params
     * @param string $method
     * @return mixed
     */
    public function action($params = [], $method = 'GET') {
        return $this->controller->AddUser();
    }
}
