<?php
/**
 * @author Nicolas
 */
require 'Controllers\DashboardController.php';
require 'Controllers\UserController.php';
use PHPUnit\Framework\TestCase;

class TestDashboardController extends TestCase{

    public function testDelete()
    {
        // Création d'instance
        $DashboardManager = new DashboardManager();
        $DashboardController = new DashboardController();
        $UserController = new UserController();
        $UserManager = new UserManager();
        $Dashboard = new Dashboard("test");
        $LoginManager = new LoginManager();
        

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

        // Récupérer la liste des utilisateurs après l'ajout
        $listeUser = $UserManager->GetAll();

        // Rechercher l'utilisateur correspondant
        $pullUser = null;
        foreach($listeUser as $user){
            if($user->attributesEquals($testUser)){
                $pullUser = $user;
            }
        }
        
        $_POST['idDashBoard'] = $UserManager->GetIdDashboardByUserId($pullUser->getId());
        var_dump($_POST['idDashBoard']);
        $_POST['idUser'] = $pullUser->getId();

        $this->assertNotNull($_POST['idDashBoard'], 'Le dashboard devrait existé');
        $UserController->Delete();
        //$DashboardController->Delete();

        var_dump($pullUser);
        $_POST['idDashBoard'] = $UserManager->GetIdDashboardByUserId($pullUser->getId());

        $this->assertNull($_POST['idDashBoard'], 'Le dashboard ne devrait plus existé');

        // Suppression de l'utilisateur ajouté pour le test
        $_POST = [
            'idUser' => $pullUser->getId(),
            'idLogin' => $testLogin->getId()
        ];
        $UserController->Delete();


        
    }

    
}
?>