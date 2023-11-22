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
        $LoginManager = new LoginManager();
        $LoginController = new LoginController();
        $testLogin = new Login("coco2","12345");
        $testLogin->setPassword("12345");

        $_POST = [
            'Username' => $testLogin->getLogin(),
            'Password' => $testLogin->getPassword()
        ];
        
        $LoginController->Add();

        $listeLogin = $LoginManager->getAll();

        // Rechercher l'utilisateur correspondant
        $pullLogin = null;
        foreach($listeLogin as $login){
            if($login->attributesEquals($testLogin)){
                $pullLogin = $login;
            }
        }

        // Assertion
        $this->assertNotNull($pullLogin, 'Le login devrait être ajouté avec succès');

        $this->assertSame(1,1);
        
    }

    
}
?>