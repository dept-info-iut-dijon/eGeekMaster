<?php
require_once 'views/View.php';
require_once 'models/DashBoardManager.php';
require_once 'models/UserManager.php';
require_once 'models/TaskManager.php';

/**
 * Class DashBoardController
 * @package Controllers
 * @author Théo Cornu
 */
class DashBoardController {

    private $UserManager;
    private $DashBoardManager;
    private $TaskManager;
    private $mainController;

    /**
     * DashBoardController constructor.
     */
    public function __construct() {
        $this->UserManager = new UserManager();
        $this->DashBoardManager = new DashBoardManager();
        $this->TaskManager = new TaskManager();
        $this->mainController = new MainController();

    }

    /**
     * Add a new DashBoard or update an existing one.
     */

    public function Add() {
        // Check if the request method is POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Determine whether to update or create a DashBoard
            if (isset($_GET['IdDashBoard'])) {
                $this->UpdateDashBoard();
            } else {
                $this->createDashBoard();
            }
        } else {
            // Check if there is an error message to display
            $errorMessage = isset($_GET['errorMessage']) ? $_GET['errorMessage'] : null;
            // Display the registration form with the error message
            $this->registrationView->generer(['errorMessage' => $errorMessage]);
        }
    }

    /**
     * Delete a DashBoard.
     */

    public function Delete() {
        // Delete a DashBoard
        $this->DashBoardManager->DeleteByID($_POST["idDashBoard"]);
        // Redirect to the main page
        $this->mainController->Index("DashBoard supprimé");
    }

    /**
     * Update a DashBoard.
     */

    public function UpdateDashBoard() {
        // Check if the request method is POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if the DashBoard exists
            if ($this->DashBoardManager->ExistsByID($_GET['IdDashBoard'])) {
                // Update the DashBoard
                $this->DashBoardManager->UpdateById($_GET['IdDashBoard'], $_POST['Name']);
                // Redirect to the main page
                $this->mainController->DashBoard("DashBoard updated");
            } else {
                // Redirect to the main page with an error message
                $this->mainController->Index("the DashBoard does not exist");
            }
        } else {
            // Check if the DashBoard exists
            if ($this->DashBoardManager->ExistsByID($_GET['IdDashBoard'])) {
                // Retrieve the DashBoard
                $dashBoard = $this->DashBoardManager->GetByID($_GET['IdDashBoard']);
                // Display the DashBoard form
                $this->registrationView->generer(['dashBoard' => $dashBoard]);
            } else {
                // Redirect to the main page with an error message
                $this->mainController->Index("Le DashBoard n'existe pas");
            }
        }
    }

    /**
     * Create a DashBoard.
     */

    public function createDashBoard() {
        // Check if the DashBoard exists
        if ($this->DashBoardManager->ExistsByName($_POST['Name'])) {
            // Redirect to the main page with an error message
            $this->mainController->Index("Le DashBoard existe déjà");
        } else {
            // Create the DashBoard
            $this->DashBoardManager->Add($_POST['Name']);
            // Redirect to the main page
            $this->mainController->Index("DashBoard créé");
        }
    }

    /**
     * Display the DashBoard page.
     */

    public function infoDashBoard() {
        // Check if the user is connected
        if (!isset($_SESSION['IdLogin'])) {
            // Redirect to the main page with an error message
            $this->mainController->Index("Vous devez être connecté pour accéder à cette page");
        } else {
            // Retrieve the User
            $user = $this->UserManager->GetByLoginID(intval($_SESSION['IdLogin']));
            // Retrieve the DashBoard
            $dashBoards = $this->DashBoardManager->Add($user->GetLogin());
            // Retrieve the Tasks
            $tasks = $this->TaskManager->GetAllByDashBoard($dashBoards);
            // Display the view
            $this->mainController->DashBoard();
        }

    }

    
    
        
        

    
    




}