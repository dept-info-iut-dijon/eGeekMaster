<?php
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
        private function UpdateDashBoard() {
            // Set properties
            $this->populateDashBoard();

            // Update the dashboard in the database
            $this->DashboardManager->UpdateDashBoard($this->Dashboard());

            // Redirect to the FollowUp page
            $this->MainController->FollowUp("Follow up updated");
        }
    }
?>