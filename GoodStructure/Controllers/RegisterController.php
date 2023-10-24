<?php
//ce fichier gère tout ce qui traite des Register(enregistrement) directement.
require_once 'views/View.php';
require_once 'models/RegisterManager.php';
require_once 'Controllers/MainController.php';

class RegisterController{
    
    public function Add() {
        $registerManager = new RegisterManager();
        $mainController = new MainController();

        $registerManager->Add(new Register($_POST["Username"], $_POST["Password"], $_POST["Firstname"], $_POST["Lastname"], $_POST["Email"], $_POST["Gender"], $_POST["selectPlaceFamily"], $_POST["DayOfBirth"] . "-" . $_POST["MonthOfBirth"] . "-" . $_POST["YearOfBirth"]));
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

