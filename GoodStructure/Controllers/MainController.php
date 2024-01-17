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
        
        $data = $this->initializeIndexData();
        
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
        $data = $this->initializeIndexData();
        $searchView->generer($data);
    }

    /**
     * Displays the connection page.
     */
    public function Connection() {
    
        $connectionView = new View("Connection");
        $data = $this->initializeIndexData();
        $connectionView->generer($data);
    }

    /**
     * Displays the registration page.
     */
    public function Registration() {
    
        $registrationView = new View("Registration");
        $data = $this->initializeIndexData();
        $registrationView->generer($data);
    }

    /**
     * Displays the dashboard page.
     */
    public function DashBoard($message = null, $idLastTast = null, $nameLastTask = null, $durationLastTask = null, $dateLastTask = null) {
        $durationLastTaskminutes = strval($durationLastTask*15%60);
        $durationLastTaskhours = strval($durationLastTask*15%4);
        
        $dashBoardView = new View("DashBoard");
        $data = $this->initializeIndexData();
        if ($message !== null) {
            $data["message"] = $message;
            
        }
        $data["idLastTast"] = $idLastTast;
        $data["nameLastTask"] = $nameLastTask;
        $data["durationLastTaskhours"] = $durationLastTaskhours;
        $data["durationLastTaskminutes"] = $durationLastTaskminutes;
        $data["dateLastTask"] = $dateLastTask;

        $taskData = $this->calculateTaskDataD();
        $data["labels"] = $taskData["labels"];
        $data["data1"] = $taskData["data1"];
        $data["data2"] = $taskData["data2"];
        
        $dashBoardView->generer($data);
    }


    /**
     * Displays the reference page.
     */
    public function Reference() {
    
        $referenceView = new View("Reference");
        $data = $this->initializeIndexData();
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
    public function FollowUp($message = null) {
    
    
        // Create a view Follow up
        $referenceView = new View("FollowUp");
        // Data to generate the page
        $data = $this->initializeIndexData();
        if($message != null) {
            $data = $message;
        }
        $taskData = $this->calculateTaskDataF();
        $data["taskPercent"] = $taskData["taskPercent"];
        $data["taskDurations"] = $taskData["taskDurations"];
        $data["taskCountPerYearMonth"] = $taskData["taskCountPerYearMonth"];
        $data["taskCountPerYear"] = $taskData["taskCountPerYear"];
        $data["labels"] = $taskData["labels"];
        $data["hoursHomeGlobalPerTask"] = $taskData["hoursHomeGlobalPerTask"];

        // Generate the view
        $referenceView->generer($data);
    }

    /**
     * Displays the CookiePolicy page.
     */
    public function CookiePolicy() {
    
        $cookiePolicyView = new View("CookiePolicy");
        $data = array(
            //ajouter les données à afficher
        );
        $cookiePolicyView->generer($data);
    }

    /**
     * Displays the LegalNotice page.
     */
    public function LegalNotice() {
    
        $legalNoticeView = new View("LegalNotice");
        $data = array(
            //ajouter les données à afficher
        );
        $legalNoticeView->generer($data);
    
    }

    /**
     * Displays the PrivacyPolicy page.
     */
    public function PrivacyPolicy() {
    
        $privacyPolicyView = new View("PrivacyPolicy");
        $data = array(
            //ajouter les données à afficher
        );
        $privacyPolicyView->generer($data);
    
    }

    /**
     * Displays the TermsConditions page.
     */
    public function TermsConditions() {

        
        $termsConditionsView = new View("TermsConditions");
        $data = array(
            //ajouter les données à afficher
        );
        $termsConditionsView->generer($data);
    
    }

    /**
     * Displays the response of the companion
     * @author Theo Cornu
     * @author Theo Deguin
     * @author Lola Cohidon
     */
    private function getResponse() : array{
        $durationC = 0;
        $imagePath = "Public/image/companion/companion1.png";
        $prop = ""; 
        $affiche = array();
    
        if (isset($_SESSION['IdLogin'])) {
            switch ($_GET['action']) {
                case 'Index':
                    $prop = $translations[$language]['gabarit_companion_index'];
                    $imagePath = "Public/image/companion/companion5.png";
                    break;
                case 'ConnectLogin':
                    $prop = $translations[$language]['gabarit_companion_connectLogin'];
                    break;
                case 'InfoDashBoard':
                    if ((isset($_SESSION['tasks'])) && ((end($_SESSION['tasks']))->getId() != null)) {
                        $currentDateT = new DateTime();
                        $currentDate = $currentDateT->format('Y-m-d');
                        $lastTaskDate = end($_SESSION['tasks'])->getDateAdded();
                        $lastTaskDateD = strtotime($lastTaskDate);
                        $currentDateD = strtotime($currentDate);
                        $oneWeekAgo = strtotime("-1 week", $currentDateD);
                        foreach ($_SESSION['tasks'] as $task) {
                            $durationC += $task->getDuration();
                        }
                        if ($lastTaskDateD <= $oneWeekAgo) {
                            $prop = $translations[$language]['gabarit_companion_infoDashBoard1'];
                        } elseif ($durationC >= 8) {
                            $prop = $translations[$language]['gabarit_companion_infoDashBoard2'];
                        } elseif ($durationC <= 4) {
                            $prop = $translations[$language]['gabarit_companion_infoDashBoard3'];
                        } else {
                            $prop = $translations[$language]['gabarit_companion_infoDashBoard4'];
                        }
                    } else {
                        $prop = $translations[$language]['gabarit_companion_infoDashBoard5'];
                    }
                    break;
                case 'Reference':
                    $prop = $translations[$language]['gabarit_companion_reference'];
                    break;
                case 'Registration':
                    $prop = $translations[$language]['gabarit_companion_registration'];
                    break;
                case 'TaskRegistration':
                    $prop = $translations[$language]['gabarit_companion_taskRegistration'];
                    break;
                case 'TaskSupression':
                    if (!isset($_SESSION['tasks']) || (end($_SESSION['tasks']))->getId() == null) {
                        $prop =$translations[$language]['gabarit_companion_taskSuppression1'] ;
                    } else {
                        $prop =$translations[$language]['gabarit_companion_taskSuppression2'] ;
                    }
                    break;
                case 'TaskModification':
                    if (!isset($_SESSION['tasks']) || (end($_SESSION['tasks']))->getId() == null) {
                        $prop =$translations[$language]['gabarit_companion_taskModification1'] ;
                    } else {
                        $prop =$translations[$language]['gabarit_companion_taskModification2'];
                    }
                    break;
                case 'InfoFollowUp':
                    $prop = "You are on the Follow Up page. Here, you can access information about task tracking.";
                    break;
                case 'AddUser' :
                    $prop =$translations[$language]['gabarit_companion_connectLogin'];
                    break;
                case 'HomeRegistration':
                    $prop = "You created a new home, now you could invite your family ? ";
                    break;
                default:
                    $prop =$translations[$language]['gabarit_companion_unknowAction'];
                    break;
            }
        } else {
            switch ($_GET['action']) {
                case 'Index':
                    $prop = 'Bienvenue sur Family\'Easy, votre nouvel outil de gestion des tâches ménagères. Vous êtes sur la page d\'accueil. Explorez les informations sur le site, son utilisation et lisez les avis des clients ici.';
                    $imagePath = "Public/image/companion/companion5.png";
                    break;
                case 'Connection':
                    $prop = 'Vous êtes sur la page de connexion. Connectez-vous ici pour accéder à votre compte.';
                    break;
                case 'Registration':
                    $prop = 'Vous êtes sur la page d\'inscription. Créez votre compte ici pour commencer.';
                    break;
                default:
                    $prop = $translations[$language]['gabarit_companion_unknownAction'];
                    break;
            }
        }
    
        $affiche[1] = $prop;
        $affiche[2] = $imagePath;
        
        return $affiche;
    }

    private function initializeIndexData() {
        $data = array();
        
        $prop = $this->getResponse();
        $data["prop"] = $prop[1];
        $data["imagePath"] = $prop[2];

        return $data;
    }

    /**
     * Calculates the task data for the dashboard.
     * @return array
     */
    private function calculateTaskDataD() {
        $labels = [];
        $data1 = [];
        $data2 = [];
        $taskDurations = [];
        $taskCounts = [];

        if (isset($_SESSION['tasks'])) {
            foreach ($_SESSION['tasks'] as $task) {
                $taskName = $task->getNameTask();
                $taskDuration = $task->getDuration();

                // Check if the task name already exists in the labels array
                if (!in_array($taskName, $labels)) {
                    $labels[] = $taskName;
                    $taskDurations[$taskName] = $taskDuration;
                    $taskCounts[$taskName] = 1;
                } else {
                    // Add the duration to the existing duration for this task name
                    $taskDurations[$taskName] += $taskDuration;
                    $taskCounts[$taskName]++;
                }
            }

            // Fill the data arrays with the corresponding durations
            foreach ($labels as $label) {
                $data1[] = $taskDurations[$label]; // Calculate total
                $data2[] = $taskDurations[$label] / $taskCounts[$label]; // Calculate average over a week
            }
        }

        return [
            "labels" => $labels,
            "data1" => $data1,
            "data2" => $data2
        ];
    }

    /**
     * Calculates the task data for the FollowUp.
     * @return array
     */
    private function calculateTaskDataF($monthChoose = null, $yearChoose = null)
    {
        $taskDurations = [];
        $labels = [];
        $tempT = 0;
        $taskDates = [];
        $taskCountPerYearMonth = [];
        $taskCountPerYear = [];
        $hoursHomeGlobalPerTask = [];

        if (isset($_SESSION['tasks'])) {
            foreach ($_SESSION['tasks'] as $task) {

                // Get name, duration and date of the task
                $taskName = $task->getNameTask();
                $taskDuration = $task->getDuration();
                $taskDate = $task->getDateAdded();

                // Separate the date in year and month
                if ($monthChoose == null && $yearChoose == null) {
                    $year = date('Y', strtotime($taskDate));
                    $month = date('n', strtotime($taskDate));
                } else {
                    $year = $yearChoose;
                    $month = $monthChoose;
                }

                if (($month == date('n')) || ($month == $monthChoose)) {
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
            }

            foreach ($labels as $label) {
                // For detail part
                $taskPercent[$label] = ceil(($taskDurations[$label] * 100) / $tempT);
                $hoursHomeGlobalPerTask[$label] = round($taskDurations[$label] / 4); // Convert quarter of hour to hours and round to the nearest integer
            }

            if (isset($_SESSION['times'])) {

                // Vider la liste taskPercent
                unset($taskPercent);
                $taskPercent = [];

                foreach ($_SESSION['times'] as $time) {
                    $taskPercent[$time->getNameTask()] = ceil(($time->getDuration() * 100) / $tempT);
                }
            }
        }

        return [
            "taskPercent" => $taskPercent,
            "taskDurations" => $taskDurations,
            "taskCountPerYearMonth" => $taskCountPerYearMonth,
            "taskCountPerYear" => $taskCountPerYear,
            "labels" => $labels,
            "hoursHomeGlobalPerTask" => $hoursHomeGlobalPerTask,
        ];
    }

    /**
     * Displays the MyHome page.
     */
    public function MyHome() {
    
        $myHomeView = new View("MyHome");
        $data = array(
            //ajouter les données à afficher
        );
        $myHomeView->generer($data);
    }

    /**
     * Displays the MyHomeRegistration page.
     */
    public function MyHomeRegistration() {
    
        $myHomeRegistrationView = new View("MyHomeRegistration");
        $data = array(
            //ajouter les données à afficher
        );
        $myHomeRegistrationView->generer($data);
    }
    public function ExportPDF($message = null) {

        
        $PDFView = new View("ExportPDF");
        
        $data = array(
            
        );
        if ($message !== null) {
            $data["message"] = $message;
            
        }
        $PDFView->generer($data);
        
    }
}