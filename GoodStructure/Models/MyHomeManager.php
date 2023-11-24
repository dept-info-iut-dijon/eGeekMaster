<?php
    require_once 'Model.php';
    require_once 'MyHome.php';

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
                $sql = 'INSERT INTO myhome (codeMyHome, nameMyHome) VALUES (:value1, :value2)';
                $this->executerRequete($sql, [
                    ':value1'=> $myHome->GetCodeMyHome(),
                    ':value2'=> $myHome->GetNameMyHome()
                ]);
                return $myHome;
            } catch (Exception $e) {
                // if error, we are redirect to the index page with an error
                $errorMessage = "An error occured while adding a home";
                header("Location : index.php?action=MyHome&errorMessage".urlencode($errorMessage));
                exit();
            }
        }

        /**
         * Update a home in the database
         * @author Enzo
         * @param $myHome the myHome object to update
         * @return MyHome return a myHome object
         */
        public function UpdateMyHome(MyHome $myHome) : MyHome {
            try {
                $sql = "UPDATE myhome SET nameMyHome = :value1 WHERE idMyHome = :value2";
                $this->executerRequete($sql, [
                    ":value1"=> $myHome->GetNameMyHome(),
                    ":value2"=> $myHome->GetIdMyHome()
                ]);
                return $myHome;
            } catch (Exception $e) {
                // if error, we are redirect to the index page with an error
                $errorMessage = "An error occured while updating a home";
                header("Location : index.php?action=MyHome&errorMessage".urlencode($errorMessage));
                exit();
            }
        }
    }
?>