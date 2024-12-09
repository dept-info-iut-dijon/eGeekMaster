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
   private $TaskManager;
   private $UserManager;

   /**
    * TaskController constructor.
    */
   public function __construct()
   {
      $this->mainController = new MainController();
      $this->UserController = new UserController();
      $this->TaskManager = new TaskManager();
      $this->UserManager = new UserManager();
   }

   public function addTask()
   {

      //$this->TaskManager->AddTask(new task($_POST['searchTask'],($_POST['hours']*4*15)+$_POST['minutes'],$_POST['Date'],$this->UserManager->GetIdDashBoardByUserId($_SESSION['IdLogin'])));
      $this->TaskManager->AddTask(new Task("zdzadza",5,"2000-01-01",15));
      $this->mainController->Index('Tâches ajouté');

   }
}