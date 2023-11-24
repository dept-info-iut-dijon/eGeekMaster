<?php
    require_once 'MainController.php';
    require_once 'Models/MyHomeManager.php';
    require_once 'Models/UserManager.php';

    /**
     * Class MyHomeController
     * @author Enzo
     */
    class MyHomeController {
        private $mainController;
        private $myHomeManager;
        private $myHome;

        public function __construct() {
            $this->mainController = new MyHomeController();
            $this->myHomeManager = new MyHomeManager();
            $this->myHome = new MyHome();
        }

        public function AddMyHome() {
            // Add a home
            $this->myHomeManager->AddMyHome($this->myHome);

            //
            $this->mainController->Index("Home create");
        }
    }
?>