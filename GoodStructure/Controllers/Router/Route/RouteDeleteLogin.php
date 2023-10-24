<?php
require_once 'Controllers/Router/Route.php';

class RouteDeleteLogin extends Route {
    private LoginController $controller;

    public function __construct(LoginController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->Delete();
    }

    public function post($params = []) {
        return $this->controller->Delete();
    }

    public function action($params = [], $method = 'POST') {
        return $this->controller->Delete();
    }
}
