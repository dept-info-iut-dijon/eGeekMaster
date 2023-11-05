<?php
//ce fichier gère tout ce qui traite des Register(enregistrement) directement.
require_once 'views/View.php';
require_once 'models/RegisterManager.php';
require_once 'Controllers/MainController.php';

class RegisterController{
    
    //Permet d'ajouter un Register et si il existe déjà, il le modifie.
    public function Add() {
        $registerManager = new RegisterManager();
        $mainController = new MainController();
        $addView = new View('Registration');
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (isset($_GET['IdRegister'])){
                $updateRegister = $registerManager->GetByID(intval($_GET['IdRegister']));
                
                $updateRegister->setPassword($_POST['password']);
                $updateRegister->setFirstName($_POST['Firstname']);
                $updateRegister->setLastName($_POST['Lastname']);
                $updateRegister->setEmail($_POST['Email']);
                $updateRegister->setGender($_POST['Gender']);
                $updateRegister->setFamilyPlace($this->FamilyPlaceToString());
                $updateRegister->setLogin($_POST['login']);
                $updateRegister->setBirthDate($_POST['DayOfBirth'] . "-" . $_POST['MonthOfBirth'] . "-" . $_POST['YearOfBirth']);
                $registerManager->updateRegister($updateRegister);
                $mainController->Index('Le Register '.$_POST['login'].' a bien été modifié !');
                var_dump($updateRegister);
            }
            else {
                $register = new register();
                
                $register->setPassword($_POST['Password']);
                $register->setFirstName($_POST['Firstname']);
                $register->setLastName($_POST['Lastname']);
                $register->setEmail($_POST['Email']);
                $register->setGender($_POST['Gender']);
                $register->setFamilyPlace($this->FamilyPlaceToString());
                $register->setBirthDate($_POST['YearOfBirth'] . "-" . $_POST['MonthOfBirth'] . "-" . $_POST['DayOfBirth']);
                $register->setLogin($_POST['Username']);
                $registerManager->addRegister($register);
                $mainController = new MainController();
                $mainController->Index('Welcome among us '.$_POST['Username']);
                var_dump($register);
            }        
        }
        else{
            $addView->generer(array(
                
            ));
        }
    }


    //non fonctionnelle pour le moment
    public function Delete() {
        $registerManager = new RegisterManager();
        $mainController = new MainController();

        $registerManager->DeleteByID($_POST["idRegister"]);

        $mainController->Index("Register supprimé");
    }


    //non fonctionnelle pour le moment
    public function Update() {
        $registerManager = new RegisterManager();
        $mainController = new MainController();

        $registerManager->UpdateById($_POST["IdRegister"],$_POST["username"], $_POST["password"]);

        $mainController->Index("Register modifié");
    }

    //to string de la FamilyPlace
    public function FamilyPlaceToString(){
        $familyPlace = "";
        $tempConcat = ", ";
        $fieldsToCheck = array(
            'parent',
            'child',
            'grandParent',
            'grandChild',
            'uncle/aunt',
            'cousin',
            'nephew/niece',
            'stepchild',
            'in-law',
            'step-parent',
            'half-sibling',
            'otherPlace'
        );

        foreach ($fieldsToCheck as $field) {
            if (isset($_POST[$field]) && $_POST[$field] !== null) {
                $familyPlace .= $_POST[$field] . $tempConcat;
            }
        }
        $familyPlace = substr($familyPlace, 0, -2);
        return $familyPlace;
    }

}

