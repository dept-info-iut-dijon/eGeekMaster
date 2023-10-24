<?php
require_once 'views/View.php';



class MainController {
    
    

    public function Index($message = null) {

        $indexView = new View("Index");
        $data = array(
            //ajouter les données à afficher
        );
        if ($message !== null) {
            $data["message"] = $message;
        }
        $indexView->generer($data);
    }



    public function Search() {
        
    
        $searchView = new View("Search");
        $data = array(
            //ajouter les données à afficher
        );
        $searchView->generer($data);
    }

    public function Connection() {
        
    
        $connectionView = new View("Connection");
        $data = array(
            //ajouter les données à afficher
        );
        $connectionView->generer($data);
    }

    public function Registration() {
        
    
        $registrationView = new View("Registration");
        $data = array(
            //ajouter les données à afficher
        );
        $registrationView->generer($data);
    }
}