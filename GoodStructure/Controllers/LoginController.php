<?php
/**
 * This file manages everything related to Login (connection) directly.
 * @author Théo Cornu
 */

require_once 'views/View.php';
require_once 'models/LoginManager.php';
require_once 'Controllers/MainController.php';

class LoginController{

    /**
     * Allows to add a Login
     * @author Théo Cornu
     */
    public function Add() {
        $loginManager = new LoginManager();
        $mainController = new MainController();

        var_dump($_POST["Username"], $_POST["Password"]);
        $loginManager->Add($_POST["Username"], $_POST["Password"]);
        
        $mainController->Index("Login ajouté");
    }

    /**
     * Allows to delete a Login by ID
     * @author Théo Cornu
     */
    public function Delete() {
        $loginManager = new LoginManager();
        $mainController = new MainController();

        $loginManager->DeleteByID($_POST["id"]);

        $mainController->Index("Login supprimé");
    }

    /**
     * Allows to edit a Login by ID
     * @param int $id The ID of the Login to edit
     * @param string $username The new username
     * @param string $password The new password
     * @return void
     * @throws Exception If the Login ID is invalid
     * @throws Exception If the Login could not be updated
     * @author Théo Cornu
     */
    public function Edit() {
        $loginManager = new LoginManager();
        $mainController = new MainController();

        $loginManager->UpdateById($_POST["id"],$_POST["Username"], $_POST["Password"]);
        
        $mainController->Index("Login modifié");
    }

    /**
     * Allows to connect a Login by ID
     * @param int $id The ID of the Login to connect
     * @return void
     * @throws Exception If the Login could not be connected
     */
    public function Connect() {
        $loginManager = new LoginManager();
        $mainController = new MainController();

        $loginManager->Connect($_POST["Username"], $_POST["Password"]);
        
        $mainController->Index("Login connecté");
    }

    /**
     * Allows to disconnect a Login
     * @param int $id The ID of the Login to disconnect
     * @return void
     * @throws Exception If the Login could not be disconnected
     */
    public function Disconnect() {
        $loginManager = new LoginManager();
        $mainController = new MainController();

        $loginManager->Disconnect();
        
        $mainController->Index("Login déconnecté");
    }
}