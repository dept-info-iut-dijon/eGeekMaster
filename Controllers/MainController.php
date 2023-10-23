<?php
require_once 'views/View.php';
require_once 'models/PokemonManager.php';


class MainController {
    private $indexView;
    private $managerIndex;
    private $listPokemon;
    private $first;
    private $other;
    

    public function Index($message = null) {
        $pokemonManager = new PokemonManager();
        $listPokemon = $pokemonManager->getAll();
        $first = $pokemonManager->getByID(1);
        $other = $pokemonManager->getByID(999);

        $indexView = new View("Index");
        $data = array(
            "nomDresseur" => "SachEEEEEEEEESH",
            "listPokemon" => $listPokemon,
            "first" => $first,
            "other" => $other
        );
        if ($message !== null) {
            $data["message"] = $message;
        }
        $indexView->generer($data);
    }

    public function Search() {
        $pokemonManager = new PokemonManager();
    
        $view = new View('Search');
        $view->generer(array(
            "Search" => "La page de recherche",
            "pokemonProperties" => $pokemonManager->getPokemonProperties()
        ));}
}