<?php
require_once 'views/View.php';

/**
 * Class MainController
 * @package Controllers
 * @author Théo Cornu
 */
class MainController {
    
    /**
     * Displays the index page.
     * @param null $message
     */
    public function Index($message = null) {

        
        $indexView = new View("Index");
        
        $data = array(
            
        );
        if ($message !== null) {
            $data["message"] = $message;
            
        }
        $indexView->generer($data);
        
    }

    /**
     * Displays the search page.
     */
    public function Search() {
    
        $searchView = new View("Search");
        $data = array(
            //ajouter les données à afficher
        );
        $searchView->generer($data);
    }

    /**
     * Displays the connection page.
     */
    public function Connection() {
    
        $connectionView = new View("Connection");
        $data = array(
            //ajouter les données à afficher
        );
        $connectionView->generer($data);
    }

    /**
     * Displays the registration page.
     */
    public function Registration() {
    
        $registrationView = new View("Registration");
        $data = array(
            //ajouter les données à afficher
        );
        $registrationView->generer($data);
    }

    /**
     * Displays the dashboard page.
     */
    public function DashBoard($message = null, $idLastTast = null, $nameLastTask = null, $durationLastTask = null, $dateLastTask = null) {
    
        $dashBoardView = new View("DashBoard");
        $data = array();
        if ($message !== null) {
            $data["message"] = $message;
            
        }
        $data["idLastTast"] = $idLastTast;
        $data["nameLastTask"] = $nameLastTask;
        $data["durationLastTask"] = $durationLastTask;
        $data["dateLastTask"] = $dateLastTask;
        $dashBoardView->generer($data);
    }

    /**
     * Displays the reference page.
     */
    public function Reference() {
    
        $referenceView = new View("Reference");
        $data = array(
            //ajouter les données à afficher
        );
        $referenceView->generer($data);
    
    }

    /**
     * Displays the Follow up page
     * @author Enzo
    */
    public function FollowUp($message = null) {
        $referenceView = new View("FollowUp");
        $data = array(
            //ajouter les données à afficher
        );
        if($message != null) {
            $data = $message;
        }
        $referenceView->generer($data);
    }
}