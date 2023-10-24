<?php
require_once 'Controllers/Router/Route.php';

class RouteAddLogin extends Route {
    private LoginController $controller;

    public function __construct(LoginController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->Add();
    }

    public function post($params = []) {
    }

    public function action($params = [], $method = 'GET') {
        return $this->controller->Add();
    }
}
