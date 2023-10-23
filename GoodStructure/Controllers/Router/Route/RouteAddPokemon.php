<?php
require_once 'Controllers/Router/Route.php';

class RouteAddPokemon extends Route {
    private PokemonController $controller;

    public function __construct(PokemonController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->AddPokemon();
    }

    public function post($params = []) {
    }

    public function action($params = [], $method = 'GET') {
        return $this->controller->AddPokemon();
    }
}
