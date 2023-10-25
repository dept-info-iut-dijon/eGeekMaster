<?php
//ce fichier gère tout ce qui traite des Register(enregistrement) directement.
require_once 'views/View.php';
require_once 'models/RegisterManager.php';
require_once 'Controllers/MainController.php';

class RegisterController{
    
    
    public function Add() {
        $registerManager = new RegisterManager();
        $mainController = new MainController();
        $addView = new View('Registration');
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (isset($_GET['IdRegister'])){
                $updateRegister = $registerManager->GetByID(intval($_GET['Idregister']));
                $updateRegister->setLogin($_POST['login']);
                $updateRegister->setPassword($_POST['password']);
                $updateRegister->setFirstName($_POST['Firstname']);
                $updateRegister->setLastName($_POST['Lastname']);
                $updateRegister->setEmail($_POST['Email']);
                $updateRegister->setGender($_POST['Gender']);
                $updateRegister->setFamilyPlace($_POST['selectPlaceFamily']);
                $updateRegister->setBirthDate($_POST['DayOfBirth'] . "-" . $_POST['MonthOfBirth'] . "-" . $_POST['YearOfBirth']);
                $registerManager->updateRegister($updateRegister);
                $mainController->Index('Le Register '.$_POST['login'].' a bien été modifié !');
                var_dump($updateRegister);
            }
            else {
                $register = new register();
                $updateRegister = $registerManager->GetByID(intval($_GET['Idregister']));
                $updateRegister->setLogin($_POST['login']);
                $updateRegister->setPassword($_POST['password']);
                $updateRegister->setFirstName($_POST['Firstname']);
                $updateRegister->setLastName($_POST['Lastname']);
                $updateRegister->setEmail($_POST['Email']);
                $updateRegister->setGender($_POST['Gender']);
                $updateRegister->setFamilyPlace($_POST['selectPlaceFamily']);
                $updateRegister->setBirthDate($_POST['DayOfBirth'] . "-" . $_POST['MonthOfBirth'] . "-" . $_POST['YearOfBirth']);
                $registerManager->addRegister($register);
                $mainController = new MainController();
                $mainController->Index('Le Pokémon '.$_POST['nomEspece'].' a bien été ajouté !');
                var_dump($updateRegister);
            }        
        }
        else{
            $addView->generer(array(
                
            ));
        }
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

