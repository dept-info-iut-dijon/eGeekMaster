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
     * @param $message
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
    
        
        $durationLastTaskminutes = strval($durationLastTask*15%60);
        $durationLastTaskhours = strval($durationLastTask*15%4);
        
        $dashBoardView = new View("DashBoard");
        $data = array();
        if ($message !== null) {
            $data["message"] = $message;
            
        }
        $data["idLastTast"] = $idLastTast;
        $data["nameLastTask"] = $nameLastTask;
        $data["durationLastTaskhours"] = $durationLastTaskhours;
        $data["durationLastTaskminutes"] = $durationLastTaskminutes;
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
     * @param $message 
     * @param $idLastTast
     * @param $nameLastTask
     * @param $durationLastTask
     * @param $dateLastTask 
    */
    public function FollowUp($message = null, $idLastTast = null, $nameLastTask = null, $durationLastTask = null, $dateLastTask = null) {
    
    $taskDurations = [];
    $labels = [];
    $tempT = 0;
    $taskDates = [];
    $taskCountPerYearMonth = [];
    $taskCountPerYear = [];

    if (isset($_SESSION['tasks'])) {                         
        foreach ($_SESSION['tasks'] as $task) {
            // Get name, duration and date of the task
            $taskName = $task->getNameTask();
            $taskDuration = $task->getDuration();
            $taskDate = $task->getDateAdded();

            // Separate the date in year and month
            $year = date('Y', strtotime($taskDate));
            $month = date('n', strtotime($taskDate));

            // If taskname is not in labels
            if (!in_array($taskName, $labels)) {
                // For detail part
                $labels[] = $taskName;
                $taskDurations[$taskName] = $taskDuration;
                $tempT += $taskDuration;

                // For global part
                // Per year
                if (!isset($taskCountPerYear[$year][$taskName])) {
                    $taskCountPerYear[$year][$taskName] = 1;
                } else {
                    $taskCountPerYear[$year][$taskName]++;
                }
                // Per month
                if (!isset($taskCountPerYearMonth[$year][$month][$taskName])) {
                    $taskCountPerYearMonth[$year][$month][$taskName] = 1;
                } else {
                    $taskCountPerYearMonth[$year][$month][$taskName]++;
                }
            } else {
                // For detail part
                $taskDurations[$taskName] += $taskDuration;
                $tempT += $taskDuration;

                // For global part
                // Per year
                if (!isset($taskCountPerYear[$year][$taskName])) {
                    $taskCountPerYear[$year][$taskName] = 1;
                } else {
                    $taskCountPerYear[$year][$taskName]++;
                }
                // Per month
                if (!isset($taskCountPerYearMonth[$year][$month][$taskName])) {
                    $taskCountPerYearMonth[$year][$month][$taskName] = 1;
                } else {
                    $taskCountPerYearMonth[$year][$month][$taskName]++;
                }
            }
        }

        foreach ($labels as $label) {
            // For detail part
            $taskPercent[$label] = ceil(($taskDurations[$label]*100) / $tempT);      
            
        }
    }




        // Separate the duration into hours and minutes
        $durationLastTaskminutes = strval($durationLastTask*15%60);
        $durationLastTaskhours = strval($durationLastTask*15%4);

        // Create a view Follow up
        $referenceView = new View("FollowUp");
        // Data to generate the page
        $data = array(
            //ajouter les données à afficher
        );
        if($message != null) {
            $data = $message;
        }
        $data["idLastTast"] = $idLastTast;
        $data["nameLastTask"] = $nameLastTask;
        $data["durationLastTaskhours"] = $durationLastTaskhours;
        $data["durationLastTaskminutes"] = $durationLastTaskminutes;
        $data["dateLastTask"] = $dateLastTask;
        $data["taskPercent"] = $taskPercent;
        $data["taskDurations"] = $taskDurations;
        $data["taskCountPerYearMonth"] = $taskCountPerYearMonth;
        $data["taskCountPerYear"] = $taskCountPerYear;
        $data["labels"] = $labels;

        // Generate the view
        $referenceView->generer($data);
    }
}