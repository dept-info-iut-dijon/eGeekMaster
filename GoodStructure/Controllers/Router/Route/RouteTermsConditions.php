<?php
require_once 'Controllers/Router/Route.php';

/**
 * Class RouteTermsConditions
 * @package Controllers\Router\Route
 *
 * This class represents the Terms & Conditions route.
 * 
 * @author Théo Deguin
 */

 class RouteTermsConditions extends Route {
    private MainController $controller;

    /**
     * RouteTermsConditions constructor.
     *
     * @param MainController $controller The main controller.
     */
    public function __construct(MainController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    /**
     * Handles GET requests for the Reference route.
     *
     * @param array $params The route parameters.
     * @return mixed The response.
     */
    public function get($params = []) {
        return $this->controller->TermsConditions();
    }

    /**
     * Handles POST requests for the Reference route.
     *
     * @param array $params The route parameters.
     * @return mixed The response.
     */
    public function post($params = []) {
        return $this->controller->TermsConditions();
    }
    

    public function action($params = [], $method = 'POST') {
        return $this->controller->TermsConditions();
    }
}