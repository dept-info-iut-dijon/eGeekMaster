<?php
require_once 'views/View.php';
require_once 'models/TaskManager.php';
require_once 'models/UserManager.php';
require_once 'Controllers/MainController.php';

/**
 * Class RouteTaskRegistration
 * @package Controllers
 * @author Nicolas
 */

class TaskController
{
   private MainController $mainController;
   private DashBoardManager $DashBoardManager;
   private TaskManager $TaskManager;   

   /**
    * TaskController constructor.
    */
   public function __construct()
   {
      $this->mainController = new MainController();
      $this->DashBoardManager = new DashBoardManager();
      $this->TaskManager = new TaskManager();
      
   }

   public function addTask()
   {
      $this->$TaskManager->AddTask(new task(null,$_POST['searchTask'],($_POST['hours']*4*15)+$_POST['minutes'],$_POST['Date'],$DashBoardManager->GetIdDashBoardByUserId($_SESSION['IdLogin'])));
   }
}