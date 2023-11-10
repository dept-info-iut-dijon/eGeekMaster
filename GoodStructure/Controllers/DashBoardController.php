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

    private function UpdateDashBoard() {
        $user = $this->UserManager->GetByLoginID(intval($_SESSION['IdLogin']));
        // Retrieve the User to update
        $updateDashBoard = $this->DashBoardManager->GetByUserID($this->UserManager->GetIdUserByLoginId(intval($_SESSION['IdLogin'])));
        $this->populateDashBoard($updateDashBoard);
        // Update the DashBoard
        $this->DashBoardManager->UpdateDashBoard($updateDashBoard);
        // Redirect to the main page
        $this->mainController->DashBoard("DashBoard updated");
        
        
    }

    /**
     * Set the properties of the DashBoard object.
     * @param DashBoard $DashBoard
     */
    private function populateDashBoard(DashBoard $DashBoard) {
        $user = $this->UserManager->GetByLoginID(intval($_SESSION['IdLogin']));
        $DashBoard->SetId($this->DashBoardManager->GetIdDashboardByUserId($this->UserManager->GetIdUserByLoginId(intval($_SESSION['IdLogin']))));
        $DashBoard->SetUsername($user->getLogin());
        $DashBoard->SetIdUser($user->getId());
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
            var_dump($user->getId());
            $this->UpdateDashBoard();
            $dashBoard = $this->DashBoardManager->GetByUserId($this->UserManager->GetIdUserByLoginId(intval($_SESSION['IdLogin'])));
            // Retrieve the Tasks
            $tasks = $this->TaskManager->GetAllByDashBoard($dashBoard);
            // Send to the session the list of Tasks
            $_SESSION['tasks'] = $tasks;
            // Display the view
            $this->mainController->DashBoard();
        }

    }


    
        
        

    
    




}