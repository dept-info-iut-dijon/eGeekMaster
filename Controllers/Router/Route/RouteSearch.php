<?php
require_once 'Controllers/Router/Route.php';

class RouteSearch extends Route {
    private MainController $controller;

    public function __construct(MainController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->Search();
    }

    public function post($params = []) {
        return $this->controller->Search();
    }

    public function action($params = [], $method = 'POST') {
        return $this->controller->Search();
    }
}
