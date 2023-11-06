<?php
require_once 'Controllers/Router/Route.php';

/**
 * Represents a route for editing a register.
 *
 * @author Théo Cornu
 */
class RouteEditRegister extends Route {
    private RegisterController $controller;

    /**
     * Initializes a new instance of the RouteEditRegister class.
     *
     * @param RegisterController $controller The register controller.
     */
    public function __construct(RegisterController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    /**
     * Handles GET requests for the route.
     *
     * @param array $params The route parameters.
     * @return mixed The result of the update operation.
     */
    public function get($params = []) {
        return $this->controller->UpdateRegister();
    }

    /**
     * Handles POST requests for the route.
     *
     * @param array $params The route parameters.
     * @return mixed The result of the update operation.
     */
    public function post($params = []) {
        return $this->controller->UpdateRegister();
    }

    /**
     * Handles requests for the route.
     *
     * @param array $params The route parameters.
     * @param string $method The request method.
     * @return mixed The result of the update operation.
     */
    public function action($params = [], $method = 'POST') {
        return $this->controller->UpdateRegister();
    }
}
