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
    }
    
}
?>