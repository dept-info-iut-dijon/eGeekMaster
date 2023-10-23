<?php
require_once 'Controllers/Router/Route.php';

class RouteEditPokemon extends Route {
    private PokemonController $controller;

    public function __construct(PokemonController $controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->Update();
    }

    public function post($params = []) {
        return $this->controller->Update();
    }

    public function action($params = [], $method = 'POST') {
        return $this->controller->Update();
    }
}
