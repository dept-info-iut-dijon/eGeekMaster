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
        private $userManager;

        public function __construct() {
            $this->mainController = new MyHomeController();
            $this->myHomeManager = new MyHomeManager();
            $this->myHome = new MyHome();
            $this->userManager = new UserManager();
        }

        /**
         * Add a home
         * @author Enzo
         */
        public function AddMyHome() : void {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_GET["idMyHome"])) {
                    $this->UpdateMyHome();
                } else {
                    $this->CreateMyHome();
                }
            } else {
                    
            }          
        }
    }
?>