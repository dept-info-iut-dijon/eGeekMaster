<?php
/**
 * This file manages everything related to User (registration) directly.
 * @author Théo Cornu
 */

require_once 'views/View.php';
require_once 'models/UserManager.php';
require_once 'Controllers/MainController.php';

class UserController{
    
    private $UserManager;
    private $mainController;
    private $loginManager;
    private $addView;

    /**
     * UserController constructor.
     */
    public function __construct() {
        $this->UserManager = new UserManager();
        $this->mainController = new MainController();
        $this->loginManager = new LoginManager();
        $this->addView = new View('Registration');
    }

    /**
     * Add a new User or update an existing one.
     */
    public function Add() {
        // Check if the request method is POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Determine whether to update or create a User
            if (isset($_GET['IdUser'])) {
                $this->UpdateUser();
            } else {
                $this->createUser();
            }
        } else {
            // Check if there is an error message to display
            $errorMessage = isset($_GET['errorMessage']) ? $_GET['errorMessage'] : null;
            // Display the registration form with the error message
            $this->addView->generer(['errorMessage' => $errorMessage]);
        }
    }

    /**
     * Delete a User.
     */
    public function Delete() {
        // Delete a User
        $this->UserManager->DeleteByID($_POST["idUser"]);
        // Redirect to the main page
        $this->mainController->Index("User supprimé");
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
     * Update an existing User.
     */
    public function UpdateUser() {
        // Retrieve the User to update
        $updateUser = $this->UserManager->GetByID(intval($_GET['IdLogin']));
        $this->populateUser($updateUser);
        // Update the User
        $this->UserManager->UpdateUser($updateUser);
        // Redirect to the main page
        $this->mainController->Index('Le User '.$_POST['Username'].' a bien été modifié !');
        var_dump($updateUser);
    }

    /**
     * Create a new User and connect the user.
     */
    private function createUser() {
        // Create a new User
        $User = new User();
        $this->populateUser($User);
        // Add the new User
        $this->UserManager->addUser($User);
        
        // header('Location: index.php?action=Index');
        // Connect the user
        $this->loginManager->Connect($_POST['Username'], $_POST['Password']);

        // Redirect to the main page
        $this->mainController->Index('Welcome among us '.$_POST['Username']);
    }

    /**
     * Set the properties of the User object.
     * @param User $User
     */
    private function populateUser(User $User) {
        // Set the properties of the User object
        $User->setPassword($_POST['Password']);
        $User->setFirstName($_POST['Firstname']);
        $User->setLastName($_POST['Lastname']);
        $User->setEmail($_POST['Email']);
        $User->setGender($_POST['Gender']);
        $User->setFamilyPlace($this->FamilyPlaceToString());
        $User->setBirthDate($_POST['YearOfBirth'] . "-" . $_POST['MonthOfBirth'] . "-" . $_POST['DayOfBirth']);
        $User->setLogin($_POST['Username']);
    }
}