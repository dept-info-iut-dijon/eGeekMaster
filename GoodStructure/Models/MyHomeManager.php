<?php
    /**
     * Class MyHomeManager
     * @author Enzo
     */
    class MyHomeManager extends Model {
        public function __construct() {
            parent::__construct();
        }

        /**
         * Add a new home to the database
         * @author Enzo
         * @param $myHome add a MyHome object
         * @return MyHome return a MyHome object
         */
        public function AddMyHome(MyHome $myHome) : MyHome {
            try {
                $sql = 'INSERT INTO myhome (codeMyHome, usernameMyHome) VALUES (:value1, :value2)';
                $this->executerRequete($sql, [
                    ':value1'=> $myHome->GetCodeMyHome(),
                    ':value2'=> $myHome->GetUsernameMyHome()
                ]);
                return $myHome;
            } catch (Exception $e) {
                // if error, we are redirect to the index page with an error
                $errorMessage = "An error occured while adding a home";
                header("Location : index.php?action=MyHome&errorMessage".urlencode($errorMessage));
                exit();
            }
        }
    }
?>