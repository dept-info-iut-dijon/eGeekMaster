<?php
require_once 'views/View.php';
require_once 'models/DashBoardManager.php';
require_once 'models/TaskManager.php';

/**
 * Class DashBoardController
 * @package Controllers
 * @author Théo Cornu
 */
class DashBoardController {
    private User $user;

    public function GetUser(User $user){
        $this->user = $user;
    }

    public function InfoDashBoard(){
        $dashBoardManager = new DashBoardManager();
        $dashBoard = $dashBoardManager->GetDashBoardByUser($this->user);
        $taskManager = new TaskManager();
        $tasks = $taskManager->GetTasksByDashBoard($dashBoard);
        $dashBoard->SetTasks($tasks);
        
    }
    




}