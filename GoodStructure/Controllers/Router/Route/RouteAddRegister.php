<?php
require_once 'Controllers/Router/Route.php';

/**
 * Class RouteAddRegister
 * @package Controllers\Router\Route
 * @author Théo Cornu
 */
class RouteAddRegister extends Route {
    /**
     * @var RegisterController
     */
    private RegisterController $controller;

    /**
     * RouteAddRegister constructor.
     * @param RegisterController $controller
     */
    public function __construct(RegisterController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function get($params = []) {
        return $this->controller->Add();
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function post($params = []) {
        return $this->controller->Add();
    }

    /**
     * @param array $params
     * @param string $method
     * @return mixed
     */
    public function action($params = [], $method = 'POST') {
        return $this->controller->Add();
    }
}
