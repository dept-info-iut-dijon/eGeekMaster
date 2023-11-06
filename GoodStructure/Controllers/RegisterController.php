<?php
/**
 * This file manages everything related to Register (registration) directly.
 * @author Théo Cornu
 */

require_once 'views/View.php';
require_once 'models/RegisterManager.php';
require_once 'Controllers/MainController.php';

class RegisterController{
    
    private $registerManager;
    private $mainController;
    private $loginManager;
    private $addView;

    /**
     * RegisterController constructor.
     */
    public function __construct() {
        $this->registerManager = new RegisterManager();
        $this->mainController = new MainController();
        $this->loginManager = new LoginManager();
        $this->addView = new View('Registration');
    }

    /**
     * Add a new register or update an existing one.
     */
    public function Add() {
        // Check if the request method is POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Determine whether to update or create a register
            if (isset($_GET['IdRegister'])) {
                $this->UpdateRegister();
            } else {
                $this->createRegister();
            }
        } else {
            // Check if there is an error message to display
            $errorMessage = isset($_GET['errorMessage']) ? $_GET['errorMessage'] : null;
            // Display the registration form with the error message
            $this->addView->generer(['errorMessage' => $errorMessage]);
        }
    }

    /**
     * Delete a register.
     */
    public function Delete() {
        // Delete a register
        $this->registerManager->DeleteByID($_POST["idRegister"]);
        // Redirect to the main page
        $this->mainController->Index("Register supprimé");
    }

    /**
     * Convert family place to string.
     * @return string
     */
    public function FamilyPlaceToString(){
        $familyPlace = "";
        $tempConcat = ", ";
        $fieldsToCheck = [
            'parent', 'child', 'grandParent', 'grandChild', 'uncle/aunt',
            'cousin', 'nephew/niece', 'stepchild', 'in-law', 'step-parent',
            'half-sibling', 'otherPlace'
        ];

        foreach ($fieldsToCheck as $field) {
            if (isset($_POST[$field]) && $_POST[$field] !== null) {
                $familyPlace .= $_POST[$field] . $tempConcat;
            }
        }
        $familyPlace = substr($familyPlace, 0, -2);
        return $familyPlace;
    }

    /**
     * Update an existing register.
     */
    public function UpdateRegister() {
        // Retrieve the register to update
        $updateRegister = $this->registerManager->GetByID(intval($_GET['IdRegister']));
        $this->populateRegister($updateRegister);
        // Update the register
        $this->registerManager->updateRegister($updateRegister);
        // Redirect to the main page
        $this->mainController->Index('Le Register '.$_POST['Username'].' a bien été modifié !');
        var_dump($updateRegister);
    }

    /**
     * Create a new register and connect the user.
     */
    private function createRegister() {
        // Create a new register
        $register = new Register();
        $this->populateRegister($register);
        // Add the new register
        $this->registerManager->addRegister($register);
        // Redirect to the main page
        $this->mainController->Index('Welcome among us '.$_POST['Username']);
        // header('Location: index.php?action=Index');
        // Connect the user
        $this->loginManager->Connect($_POST['Username'], $_POST['Password']);
    }

    /**
     * Set the properties of the Register object.
     * @param Register $register
     */
    private function populateRegister(Register $register) {
        // Set the properties of the Register object
        $register->setPassword($_POST['Password']);
        $register->setFirstName($_POST['Firstname']);
        $register->setLastName($_POST['Lastname']);
        $register->setEmail($_POST['Email']);
        $register->setGender($_POST['Gender']);
        $register->setFamilyPlace($this->FamilyPlaceToString());
        $register->setBirthDate($_POST['YearOfBirth'] . "-" . $_POST['MonthOfBirth'] . "-" . $_POST['DayOfBirth']);
        $register->setLogin($_POST['Username']);
    }
}
