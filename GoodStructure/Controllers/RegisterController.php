<?php
//ce fichier gère tout ce qui traite des Register(enregistrement) directement.
require_once 'views/View.php';
require_once 'models/RegisterManager.php';
require_once 'Controllers/MainController.php';

class RegisterController{
    
    public function Add() {
        $registerManager = new RegisterManager();
        $mainController = new MainController();

        $registerManager->Add(new Register($_POST["login"], $_POST["password"], $_POST["firstName"], $_POST["lastName"], $_POST["email"], $_POST["gender"], $_POST["familyPlace"], $_POST["birthDate"]));

        $mainController->Index("Register ajouté");
    }

    public function Delete() {
        $registerManager = new RegisterManager();
        $mainController = new MainController();

        $registerManager->DeleteByID($_POST["id"]);

        $mainController->Index("Register supprimé");
    }

    public function Update() {
        $registerManager = new RegisterManager();
        $mainController = new MainController();

        $registerManager->UpdateById($_POST["id"],$_POST["username"], $_POST["password"]);

        $mainController->Index("Register modifié");
    }

}

