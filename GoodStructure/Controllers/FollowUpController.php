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
        private $FollowUpManager;
        private $FollowUp;

        /**
         * FollowUpController constructor
         * @author Enzo
         */
        public function __construct() {
            $this->MainController = new MainController();
            $this->TaskManager = new TaskManager();
            $this->UserManager = new UserManager();
            $this->LoginManager = new LoginManager();
            $this->FollowUpManager = new FollowUpManager();
            $this->FollowUp = new FollowUp();
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
                $tasks = $this->TaskManager->GetAllTasks($this->FollowUp);
                // Send to the session the list of tasks
                $_SESSION['tasks'] = $tasks;

                // Display the view of Follow Up
                $this->MainController->FollowUp();
            }
        }

        /**
         * Update a Follow Up
         */
        public function UpdateFollowUp() {
            $this->PopulateFollowUp();

            $this->FollowUpManager->UpdateFollowUp($this->FollowUp());

            $this->MainController->FollowUp("Follow up updated");
        }
    }
?>