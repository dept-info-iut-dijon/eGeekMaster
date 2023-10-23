<?php
require_once 'Controllers/Router/Route.php';

class RouteDeletePokemon extends Route {
    private PokemonController $controller;

    public function __construct(PokemonController $controller) {
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
