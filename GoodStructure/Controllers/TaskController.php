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
   private $mainController;
   private $UserController;

   /**
    * TaskController constructor.
    */
   public function __construct()
   {
      $this->mainController = new MainController();
      $this->UserController = new UserController();
   }

   public function addTask()
   {
      $TaskManager = new TaskManager();
      $UserManager = new UserManager();
      $TaskManager->AddTask(new task(null,$_POST['searchTask'],($_POST['hours']*4*15)+$_POST['minutes'],$_POST['Date'],$UserManager->GetIdDashBoardByUserId($_SESSION['IdLogin'])));
   }
}