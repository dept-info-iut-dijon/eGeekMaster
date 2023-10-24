<?php
require_once 'Controllers/Router/Route.php';

class RouteAddRegister extends Route {
    private RegisterController $controller;

    public function __construct(RegisterController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->Add();
    }

    public function post($params = []) {
        return $this->controller->Add();
    }

    public function action($params = [], $method = 'POST') {
        return $this->controller->Add();
    }
}
