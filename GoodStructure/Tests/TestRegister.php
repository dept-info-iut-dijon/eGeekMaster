<?php
/**
 * @author Nicolas
 */
require 'vendor\autoload.php';
require 'Controllers\MainController.php';
require 'Controllers\UserController.php';


use PHPUnit\Framework\TestCase;


class TestRegister extends TestCase
{

    public function testRegister()
    {
        //$MainController = $this->createMock(MainController::class);
        //$UserManager = $this->createMock(UserManager::class);
        $UserController = new UserController();
        //$testUser = new User("Nicolas","Desertot","a@a.fr","testN@testN.fr","parent","2001-05-03");
        $testLogin = new Login("coco","12345");
        $testLogin->setPassword("12345");
        $_POST['Password'] = '12345';
        $_POST['Firstname'] = 'Nicolas';
        $_POST['Lastname'] = 'Desertot';
        $_POST['Email'] = 'testN@testN.fr';
        $_POST['Gender'] = 'man';
        $_POST['parent'] = 'parent';
        $_POST['YearOfBirth'] = '2001';
        $_POST['MonthOfBirth'] = '5';
        $_POST['DayOfBirth'] = '3';
        $_POST['Username'] = 'coco';
        $_SERVER["REQUEST_METHOD"] = "POST";
        $UserController->Add();
        //$listeUser = $UserManager->GetAll();
        //$testUser = null;
        /*foreach($listeUser as $user){
            if($user == $testUser){
                $testUser = $user;
            }
        }*/
        //$this->assertNotEquals(null, $testUser);

        $this->assertSame($testLogin->getLogin(),"coco","testRegister");
        
    }

    
}
?>