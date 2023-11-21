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
         */
        public function __construct() {
            $this->MainController = new MainController();
            $this->TaskManager = new TaskManager();
            $this->UserManager = new UserManager();
            $this->LoginManager = new LoginManager();
            $this->FollowUpManager = new FollowUpManager();
            $this->FollowUp = new FollowUp();
        }
    }
?>