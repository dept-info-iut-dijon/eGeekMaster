<?php
/**
 * @author Nicolas
 */
require '/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use MainController;
use UserController;
use UserManager;

class TestRegister extends TestCase{

    public function testRegister()
    {
        $MainController = $this->createMock(MainController::class);
        $UserManager = $this->createMock(UserManager::class);
        $UserController = new UserController();
        $testUser = new User("Nicolas","Desertot","a@a.fr","testN@testN.fr","parent","2001-05-03");
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
        $UserController->Add();
        $this->assertTrue($testUser->getFirstName() == 'Nicolas');
        
    }

    
}
?>