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
    
        $labels = [];
        $data1 = [];
        $data2 = [];
        $taskDurations = [];
        $taskCounts = [];

        if (isset($_SESSION['tasks'])) {
            foreach ($_SESSION['tasks'] as $task) {
                $taskName = $task->getNameTask();
                $taskDuration = $task->getDuration();

                // Vérifier si le nom de tâche existe déjà dans le tableau des labels
                if (!in_array($taskName, $labels)) {
                    $labels[] = $taskName;
                    $taskDurations[$taskName] = $taskDuration;
                    $taskCounts[$taskName] = 1;
                } else {
                    // Ajouter la durée à la durée existante pour ce nom de tâche
                    $taskDurations[$taskName] += $taskDuration;
                    $taskCounts[$taskName]++;
                }
            }

            // Remplir les tableaux de données avec les durées correspondantes
            foreach ($labels as $label) {
                $data1[] = $taskDurations[$label]; // Exemple de valeur statique pour le graphique 1
                $data2[] = $taskDurations[$label] / $taskCounts[$label]; // Calculer la moyenne sur une semaine
            }
        }


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
        $data["labels"] = $labels;
        $data["data1"] = $data1;
        $data["data2"] = $data2;
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
}