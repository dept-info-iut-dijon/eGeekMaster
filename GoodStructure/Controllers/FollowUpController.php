<?php
    require_once 'views/View.php';
    require_once 'models/DashBoardManager.php';
    require_once 'models/UserManager.php';
    require_once 'models/TaskManager.php';

    /**
     * Class FollowUpController
     * @author Enzo
     */
    class FollowUpController {
        private $mainController;
        private $taskManager;
        private $userManager;
        private $loginManager;
        private $dashboardManager;
        private $dashboard;

        /**
         * FollowUpController constructor
         * @author Enzo
         */
        public function __construct() {
            $this->mainController = new MainController();
            $this->taskManager = new TaskManager();
            $this->userManager = new UserManager();
            $this->loginManager = new LoginManager();
            $this->dashboardManager = new DashBoardManager();
            $this->dashboard = new DashBoard();
        }

        /**
         * Display the follow up page
         * @author Enzo
         */
        public function InfoFollowUp() {
            // Check if the user is connected
            if(!isset($_SESSION['IdLogin'])) {
                // Redirect to the main page with an error message
                $this->mainController->Index("You must be connected to access to this page");
            }
            else {
                // Update the Follow up  
                $this->UpdateDashboard();

                // Retrieve the tasks
                $tasks = $this->taskManager->GetAllByDashBoard($this->dashboard);
                // Send to the session the list of tasks
                $_SESSION['tasks'] = $tasks;

                // Display the view of Follow Up
                $this->mainController->FollowUp();
            }
        }

        /**
         * Update a Follow Up
         * @author Enzo
         */
        private function UpdateDashboard() {
            $this->PopulateDashboard();

            $this->dashboardManager->UpdateDashBoard($this->dashboard);

            $this->mainController->FollowUp("Follow up updated");
        }

        /**
         * Set the properties of the DashBoard object
         * @author Enzo
         */
        private function PopulateDashboard() {
            $idUser = $this->userManager->GetIdUserByLoginId(intval($_SESSION['IdLogin']));
            $username = $this->loginManager->GetUsernameByIdLogin(intval($_SESSION['IdLogin']));
            
            $this->dashboard->SetId($this->userManager->GetIdDashboardByUserId($idUser));
            $this->dashboard->SetUsername($username);
            $this->dashboard->SetIdUser($idUser);
        }
    }
?>