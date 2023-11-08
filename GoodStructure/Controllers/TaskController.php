<?php
require_once 'views/View.php';

/**
 * Class TaskController
 * @package Controllers
 * @author Théo Cornu
 */
class TaskController {
    
    private DashBoard $dashboard = null;

    public function GetDashBoard(DashBoard $dashboard){
        $this->dashboard = $dashboard;
    }
}