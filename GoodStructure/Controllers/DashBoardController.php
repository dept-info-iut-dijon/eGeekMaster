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
    private $loginManager;
    private $DashBoard;

    /**
     * DashBoardController constructor.
     */
    public function __construct() {
        $this->UserManager = new UserManager();
        $this->DashBoardManager = new DashBoardManager();
        $this->TaskManager = new TaskManager();
        $this->mainController = new MainController();
        $this->loginManager = new LoginManager();
        $this->DashBoard = new DashBoard();

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
        $this->populateDashBoard($this->DashBoard);
        // Update the DashBoard
        $this->DashBoardManager->UpdateDashBoard($this->DashBoard);
        // Redirect to the main page
        $this->mainController->DashBoard("DashBoard updated");
        
        
    }

    /**
     * Set the properties of the DashBoard object.
     * @param DashBoard $DashBoard
     */
    private function populateDashBoard(DashBoard $DashBoard) {
        $idUser = $this->UserManager->GetIdUserByLoginId(intval($_SESSION['IdLogin']));
        $username = $this->loginManager->GetUsernameByIdLogin(intval($_SESSION['IdLogin']));
        
        $DashBoard->SetId($this->DashBoardManager->GetIdDashboardByUserId($idUser));
        $DashBoard->SetUsername($username);
        $DashBoard->SetIdUser($idUser);
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
            // // Retrieve the idUser
            // $idUser = $this->UserManager->GetIdUserByLoginId(intval($_SESSION['IdLogin']));
            // // Retrieve the DashBoard
            // $idDashboard = $this->UserManager->GetIdDashBoardByUserId($idUser);
            // // Retrieve the DashBoard
            var_dump($this->DashBoard);
            $this->UpdateDashBoard();
            var_dump($this->DashBoard);
            
            
            // Retrieve the Tasks
            $tasks = $this->TaskManager->GetAllByDashBoard($this->DashBoard);
            // Send to the session the list of Tasks
            $_SESSION['tasks'] = $tasks;
            // Display the view
            $this->mainController->DashBoard();
        }

    }


    
        
        

    
    




}