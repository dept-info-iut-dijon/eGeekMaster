<?php
/**
 * @author Nicolas
 */
require 'vendor\autoload.php';
require 'Controllers\MainController.php';
require 'Controllers\UserController.php';


use PHPUnit\Framework\TestCase;
use SebastianBergmann\Type\VoidType;


class TestUserController extends TestCase
{

    public function testAdd()
    {
        // Création d'instance
        $UserManager = new UserManager();
        $UserController = new UserController();

        // Variable de test
        $testUser = new User("Nicolas","Desertot","testN@testN.fr","man","parent","2001-05-03");
        $testLogin = new Login("coco","12345");
        $testLogin->setPassword("12345");

        // Données de test
        $_POST = [
            'Password' => '12345',
            'Firstname' => 'Nicolas',
            'Lastname' => 'Desertot',
            'Email' => 'testN@testN.fr',
            'Gender' => 'man',
            'parent' => 'parent',
            'YearOfBirth' => '2001',
            'MonthOfBirth' => '5',
            'DayOfBirth' => '3',
            'Username' => 'coco'
        ];

        $_SERVER["REQUEST_METHOD"] = "POST";

        // Appeler la méthode à tester
        $UserController->Add();
        $this->assertsame(1,1);
        // Récupérer la liste des utilisateurs après l'ajout
        $listeUser = $UserManager->GetAll();

        // Rechercher l'utilisateur correspondant
        $pullUser = null;
        foreach($listeUser as $user){
            if($user->attributesEquals($testUser)){
                $pullUser = $user;
            }
        }

        // Assertion
        $this->assertNotNull($pullUser, 'L\'utilisateur devrait être ajouté avec succès');

        // Suppression de l'utilisateur ajouté pour le test
        $_POST = [
            'idUser' => $pullUser->getId(),
            'idLogin' => $testLogin->getId()
        ];
        $UserController->Delete();
    }

    public function testDelete()
    {
        // Création d'instance
        $UserManager = new UserManager();
        $UserController = new UserController();

        // Variable de test
        $testUser = new User("Nicolas","Desertot","testN@testN.fr","man","parent","2001-05-03");
        $testLogin = new Login("coco","12345");
        $testLogin->setPassword("12345");

        // Données de test
        $_POST = [
            'Password' => '12345',
            'Firstname' => 'Nicolas',
            'Lastname' => 'Desertot',
            'Email' => 'testN@testN.fr',
            'Gender' => 'man',
            'parent' => 'parent',
            'YearOfBirth' => '2001',
            'MonthOfBirth' => '5',
            'DayOfBirth' => '3',
            'Username' => 'coco'
        ];

        $_SERVER["REQUEST_METHOD"] = "POST";

        // Ajout de l'utilisateur pour tester la méthode de suppression
        $UserController->Add();

        // La liste des utilisateurs après l'ajout
        $listeUser = $UserManager->GetAll();

        var_dump("testtesttest");
        var_dump($listeUser);
        // Rechercher l'utilisateur correspondant à supprimer
        $pullUser = null;
        foreach($listeUser as $user){
            if($user->attributesEquals($testUser)){
                $pullUser = $user;
            }
        }

        // Assertion test si l'utilisateur est bien présent dans la liste
        $this->assertNotNull($pullUser, 'L\'utilisateur devrait être présent');

        // Données de test
        $_POST['idUser'] = $pullUser->getId();

        // Suppression de l'utilisateur
        $UserController->Delete();

         // La liste des utilisateurs après la suppression
         $listeUser = $UserManager->GetAll();

        // Rechercher l'utilisateur correspondant à supprimer
        $pullUser2 = null;
        foreach($listeUser as $user){
            if($user->attributesEquals($testUser)){
                $pullUser2 = $user;
            }
        }

        // Assertion test si l'utilisateur est bien absent dans la liste
        $this->assertNull($pullUser2, 'L\'utilisateur devrait être supprimé');
    }
}
?>