<?php
require_once 'views/View.php';
require_once 'models/TaskManager.php';
require_once 'models/UserManager.php';
require_once 'Controllers/MainController.php';

/**
 * Class RouteTaskRegistration
 * @package Controllers
 * @author Nicolas
 * @author Théo
 */

class TaskController
{
   private MainController $mainController;
   private DashBoardManager $DashBoardManager;
   private TaskManager $TaskManager;  
   private Task $Task; 

   /**
    * TaskController constructor.
    * @author Théo
    */
   public function __construct()
   {
      $this->mainController = new MainController();
      $this->DashBoardManager = new DashBoardManager();
      $this->TaskManager = new TaskManager();
      $this->Task = new Task();

      
   }

   /**
     * Add a new Task or update an existing one.
    * @author Théo
     */
   public function addTask()
   {
      // Check if the request method is POST
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // Determine whether to update or create a Task
         if (isset($_GET['IdLogin'])) {
             $this->UpdateTask();
         } else {
             $this->createTask();
         }
     } else {
         // Check if there is an error message to display
         $errorMessage = isset($_GET['errorMessage']) ? $_GET['errorMessage'] : null;
         // Display the registration form with the error message
         $this->mainController->DashBoard($errorMessage); 
     }
   }

   /**
    * Delete a Task.
    * @author Théo
    */
   public function deleteTask()
   {
      // Delete a Task
      $this->TaskManager->DeleteByID($_POST["idTask"]);
      // Redirect to the main page
      $this->mainController->DashBoard("Tâche supprimée");
   }


   /**
    * Create a new Task.
    * @author Théo
    */
   private function createTask()
   {
      // Check if the Task already exists
      if ($this->TaskManager->CheckIfTaskExists($_POST["searchTask"])) {
         // Redirect to the registration page with an error message
         $this->mainController->DashBoard("La tâche existe déjà");
      } else {
         // Create a new Task
         $this->populateTask();
         // Add the new User
         $this->TaskManager->addTask($this->Task);
         // Redirect to the main page
         $this->mainController->DashBoard("Tâche créée");
         
      }
   }

   /**
    * Update an existing Task.
    * @author Théo
    */
   private function UpdateTask()
   {
      populateTask();
      // Update an existing Task
      $this->TaskManager->UpdateTask($this->Task);
      // Redirect to the main page
      $this->mainController->DashBoard("Tâche modifiée");
   }

   private function populateTask()
   {
      
      // Set the properties of the Task object
      $this->Task->setNameTask($_POST['searchTask']);
      $this->Task->setDuration($_POST['hours']*4+$_POST['minutes']/15);
      $this->Task->setDateAdded($_POST['Date']);
      $this->Task->setIdDashBoard($this->DashBoardManager->GetIdDashBoardByLoginId($_SESSION['IdLogin']));
   }

   /**
    * Get all Tasks.
    * @author Théo
    */
   public function getAllTasks()
   {
      // Get all Tasks
      $tasks = $this->TaskManager->GetAllTasks();
      // Display the main page with all Tasks
      $this->mainController->DashBoard($tasks);
   }

   /**
    * Get all Tasks by idLogin.
    * @author Théo
    */
   public function getAllTasksByIdLogin()
   {
      // Get all Tasks by idLogin
      $tasks = $this->TaskManager->GetAllTasksByIdLogin($_GET['idLogin']);
      // Display the main page with all Tasks by idLogin
      $this->mainController->Dashboard($tasks);
   }


}