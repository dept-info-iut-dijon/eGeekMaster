<?php
/**
 * @author Nicolas
 */
require 'vendor\autoload.php';
require 'Controllers\LoginController.php';
use PHPUnit\Framework\TestCase;


class TestLoginController extends TestCase
{

    public function testAdd()
    {
        // Création d'instance
        $LoginManager = new LoginManager();
        $LoginController = new LoginController();

        // Variable de test
        $testLogin = new Login("coco2","12345");
        $testLogin->setPassword("12345");

        $_POST = [
            'Username' => $testLogin->getLogin(),
            'Password' => $testLogin->getPassword()
        ];
        
        // Appeler la méthode à tester pour l'ajout d'un login
        $LoginController->Add();

        // Récupérer la liste des utilisateurs après l'ajout
        $listeLogin = $LoginManager->getAll();

        // Rechercher du login correspondant
        $pullLogin = null;
        foreach($listeLogin as $login){
            $log = new Login($login['username'],$login['Hash']);
            $log->setId($login['idLogin']);
            if($log->attributesEquals($testLogin)){
                $pullLogin = $log;
            }
        }

        // Assertion pour tester si le login a bien été ajouté
        $this->assertNotNull($pullLogin, 'Le login devrait être ajouté avec succès');
        
        // Suppression du login ajouté pour le test
        $_POST = [
            'id' => $pullLogin->getId()
        ];
        $LoginController->Delete();
    }

    public function testDelete()
    {
        // Création d'instance
        $LoginManager = new LoginManager();
        $LoginController = new LoginController();

        // Variable de test
        $testLogin = new Login("coco2","12345");
        $testLogin->setPassword("12345");

        $_POST = [
            'Username' => $testLogin->getLogin(),
            'Password' => $testLogin->getPassword()
        ];
        
        // Appeler la méthode pour l'ajout d'un login à supprimer
        $LoginController->Add();

        // Récupérer la liste des utilisateurs après l'ajout
        $listeLogin = $LoginManager->getAll();

        // Rechercher du login correspondant
        $pullLogin = null;
        foreach($listeLogin as $login){
            $log = new Login($login['username'],$login['Hash']);
            $log->setId($login['idLogin']);
            if($log->attributesEquals($testLogin)){
                $pullLogin = $log;
            }
        }

        // Assertion pour tester si le login a bien été ajouté
        $this->assertNotNull($pullLogin, 'Le login devrait être ajouté avec succès');
        
        
        // Appeler la méthode à tester pour la suppression d'un login
        $_POST = [
            'id' => $pullLogin->getId()
        ];
        $LoginController->Delete();

        // Récupérer la liste des utilisateurs après la suppression
        $listeLogin = $LoginManager->getAll();

        // Rechercher du login correspondant
        $pullLogin2 = null;
        foreach($listeLogin as $login){
            $log = new Login($login['username'],$login['Hash']);
            $log->setId($login['idLogin']);
            if($log->attributesEquals($testLogin)){
                $pullLogin2 = $log;
            }
        }
        var_dump($pullLogin);
        var_dump($pullLogin2);
        var_dump($_POST['id']);
        // Assertion pour tester si le login a bien été supprimé
        $this->assertNull($pullLogin2, 'Le login devrait être supprimé avec succès');
    }

    
}
?>