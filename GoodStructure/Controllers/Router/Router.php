<?php
foreach (glob("Controllers/*.php") as $filename) {
    require_once $filename;
};
require_once 'Controllers/Router/Route.php';
foreach (glob("Controllers/Router/Route/*.php") as $filename) {
    require_once $filename;
};


class Router {
    private array $routeList = [];
    private array $ctrlList = [];
    private string $action_key;

    public function __construct($name_of_action_key = "action") {
        // Set the action key
        $this->action_key = $name_of_action_key;
        // Create the controller list
        $this->createControllerList();
        // Create the route list
        $this->createRouteList();
    }

    public function createControllerList() {
        // Create the controller list
        $this->ctrlList = ['MainController' => new MainController(), 
        'PokemonController' => new PokemonController()];
    }

    public function createRouteList() {
        // Create the route list
        $this->routeList = ["Index" => new RouteIndex($this->ctrlList["MainController"]),
         "AddPokemon" => new RouteAddPokemon($this->ctrlList["PokemonController"]),
         "DeletePokemon" => new RouteDeletePokemon($this->ctrlList["PokemonController"]),
         "Search" => new RouteSearch($this->ctrlList["MainController"]),
         "AddType" => new RouteAddType($this->ctrlList["PokemonController"]),
         "EditPokemon" => new RouteEditPokemon($this->ctrlList["PokemonController"]),];
    }

    public function routing($get, $post) {
        // Check if the action key is present in the GET data
        if (isset($get[$this->action_key])) {
            // Get the action from the GET data
            $action = $get[$this->action_key];

            // Get the route linked to the action    
            $route = $this->routeList[$action];

            // If no route is found, throw an exception
            if (!$route) {
                throw new Exception("Route not found for action: " . $action);
            }

            // Invoke the action method of the route with the appropriate HTTP method
            if (!empty($post)) {
                $route->action($post, 'POST');
            } else {
                $route->action('GET');
            }
        }
    }
}
