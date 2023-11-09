<?php
require_once 'views/View.php';
require_once 'models/TaskManager.php';
require_once 'Controllers/MainController.php';

/**
 * Class RouteTaskRegistration
 * @package Controllers
 * @author Nicolas
 */

class TaskController
{
   /**
    * TaskController constructor.
    */
   public function __construct()
   {
      $this->TaskManager = new TaskManager();
      $this->mainController = new MainController();
   }

   public function addTask()
   {
      
   }
}