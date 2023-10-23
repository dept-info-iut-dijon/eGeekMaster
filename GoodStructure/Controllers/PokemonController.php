<?php
//ce fichier gère tout ce qui traite des pokémons directement.
require_once 'views/View.php';
require_once 'models/PokemonManager.php';
require_once 'Controllers/MainController.php';

class PokemonController{
    

    private $deleteView;
    private $managerDelete;
    private $deletePokemon;
    private $delete;

    public function Delete(){
        $pokemonManager = new PokemonManager();
        $deleteView = new View("Index");
        $deletePokemon = $pokemonManager->getByID(intval($_GET['IdPokemon']));
        $pokemonName = $deletePokemon->getNomEspece(); // Ajout de cette ligne pour récupérer le nom du Pokémon
        
        $delete = $pokemonManager->deleteByID(intval($_GET['IdPokemon']));
        
        $mainController = new MainController();
        $mainController->Index($pokemonName.' bien supprimé !');

    }

    public function AddPokemon() {
        $pokemonManager = new PokemonManager();

        $view = new View('AddPokemon');
        $view->generer(array(
            "AddPokemon" => "La page d'ajout de pokémon"
        ));
    }

    public function AddType() {
        $pokemonManager = new PokemonManager();

        $view = new View('AddType');
        // $updateTypePokemon = $pokemonManager->getByID(intval($_GET['IdPokemon']));
        // $updateType = $pokemonManager->updateTypeByID(intval($_GET['IdPokemon']), $_GET['TypeOne'], $_GET['TypeTwo']);
        $view->generer(array(
            "AddType" => "La page d'ajout de type"
        ));
    }

    public function Update() {
        $pokemonManager = new PokemonManager();

        $view = new View('AddPokemon');
        $view->generer(array(
            "AddPokemon" => "La page de modification"
        ));
    }

    


}
