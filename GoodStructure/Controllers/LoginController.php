<?php
//ce fichier gère tout ce qui traite des Login(connection) directement.
require_once 'views/View.php';
require_once 'models/LoginManager.php';
require_once 'Controllers/MainController.php';


class LoginController{

    public function Add() {
        $loginManager = new LoginManager();
        $mainController = new MainController();

        var_dump($_POST["Username"], $_POST["Password"]);
        $loginManager->Add($_POST["Username"], $_POST["Password"]);

        $mainController->Index("Login ajouté");
    }

    public function Delete() {
        $loginManager = new LoginManager();
        $mainController = new MainController();

        $loginManager->DeleteByID($_POST["id"]);

        $mainController->Index("Login supprimé");
    }

    public function Edit() {
        $loginManager = new LoginManager('localhost', 'root', '', 'mvc_login');
        $mainController = new MainController();

        $loginManager->UpdateById($_POST["id"],$_POST["Username"], $_POST["Password"]);

        $mainController->Index("Login modifié");
    }

    

    
}

