<?php
/**
 * @author Nicolas
 */
require 'vendor\autoload.php';
require 'Controllers\LoginController.php';
require 'Controllers\TaskController.php';
use PHPUnit\Framework\TestCase;


class TestTaskController extends TestCase
{
   public function testAddTaskCreate()
   {
      // Création d'instance
      $Task = new Task(156,"Shopping",1,"2021-05-03",44);
      $TaskManager = new TaskManager();
      $TaskController = new TaskController();

      // Données de test
      $_SESSION['IdLogin'] = 86;

      $_POST = [ 
         'searchTask' => 'Shopping',
         'hours' => '0',
         'minutes' => '15',
         'Date' => '2021-05-03'
      ];

      $_SERVER["REQUEST_METHOD"] = "POST";

      // Appeler la méthode à tester pour l'ajout d'une tâche
      $TaskController->AddTask();

      // Vérifier que la tâche a bien été ajoutée
      $this->assertTrue($TaskManager->CheckIfTaskExists($Task));

      // Suppression de la tâche ajoutée pour le test
      $TaskController->DeleteTask();
   }

   public function testDeleteTask()
   {
      // Création d'instance
      $Task = new Task(156,"Shopping",1,"2021-05-03",44);
      $TaskManager = new TaskManager();
      $TaskController = new TaskController();

      // Données de test
      $_SESSION['IdLogin'] = 86;

      $_POST = [ 
         'searchTask' => 'Shopping',
         'hours' => '0',
         'minutes' => '15',
         'Date' => '2021-05-03'
      ];

      $_SERVER["REQUEST_METHOD"] = "POST";

      // Appeler la méthode à tester pour l'ajout d'une tâche
      $TaskController->AddTask();

      // Vérifier que la tâche a bien été ajoutée
      $this->assertTrue($TaskManager->CheckIfTaskExists($Task));

      // Suppression de la tâche ajoutée pour le test
      $TaskController->DeleteTask();

      // Vérifier que la tâche a bien été supprimée
      $this->assertFalse($TaskManager->CheckIfTaskExists($Task)); 
   }

   public function testAddTaskUpdate()
   {
    
   }

    
}
?>