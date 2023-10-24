<?php
require_once 'Controllers/Router/Route.php';

class RouteRegistration extends Route {
    private MainController $controller;

    public function __construct(MainController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->Registration();
    }

    public function post($params = []) {
        return $this->controller->Registration();
    }

    public function action($params = [], $method = 'GET') {
        return $this->controller->Registration();
    }
}
