<?php
    require_once 'Model.php';
    require_once 'Task.php';
    require_once 'DashBoard.php';
    require_once 'Controllers/MainController.php';
    require_once 'Models/DashboardManager.php';

    /**
     * Class FollowUpController
     * @author Enzo
     */
    class FollowUpController {
        private $MainController;
        private $TaskManager;
        private $UserManager;
        private $LoginManager;
        private $DashboardManager;
        private $Dashboard;

        /**
         * FollowUpController constructor
         * @author Enzo
         */
        public function __construct() {
            $this->MainController = new MainController();
            $this->TaskManager = new TaskManager();
            $this->UserManager = new UserManager();
            $this->LoginManager = new LoginManager();
            $this->DashboardManager = new DashboardManager();
            $this->Dashboard = new Dashboard();
        }

        /**
         * Display the follow up page
         * @author Enzo
         */
        public function InfoFollowUp() {
            // Check if the user is connected
            if(!isset($_SESSION['IdLogin'])) {
                // Redirect to the main page with an error message
                $this->MainController->Index("You must be connected to access to this page");
            }
            else {
                // Update the Follow up  
                $this->UpdateFollowUp();

                // Retrieve the tasks
                $tasks = $this->TaskManager->GetAllByDashBoard($this->Dashboard);
                // Send to the session the list of tasks
                $_SESSION['tasks'] = $tasks;

                // Display the view of Follow Up
                $this->MainController->FollowUp();
            }
        }

        /**
         * Update a dashboard
         * @author Enzo
         */
        private function UpdateDashboard() {
            // Set properties
            $this->PopulateDashboard();

            // Update the dashboard in the database
            $this->DashboardManager->UpdateDashBoard($this->Dashboard());

            // Redirect to the FollowUp page
            $this->MainController->FollowUp("Follow up updated");
        }

        /**
         * Set the properties of the DashBoard object.
         * @author Enzo
         */
        private function PopulateDashboard() {
            $idUser = $this->UserManager->GetIdUserByLoginId(intval($_SESSION['IdLogin']));
            $username = $this->LoginManager->GetUsernameByIdLogin(intval($_SESSION['IdLogin']));
            
            $this->DashBoard->SetId($this->UserManager->GetIdDashboardByUserId($idUser));
            $this->DashBoard->SetUsername($username);
            $this->DashBoard->SetIdUser($idUser);
        }

    }
?>