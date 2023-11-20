<?php
require_once 'Model.php';
require_once 'Task.php';
require_once 'DashBoard.php';
require_once 'Controllers/MainController.php';
require_once 'Models/DashboardManager.php';

/**
 * Class DashBoardManager
 * @package GoodStructure\Models
 * @author Nicolas
 * @author Théo Cornu
 */
class TaskManager extends Model
{

    /**
     * TaskManager constructor.
     */

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Retrieve a list of Tasks by its dashboard from the database.
     *
     * @param DashBoard $dashboards The dashboard to retrieve the tasks from.
     * @return array|null An array of Task objects, or null if no tasks are found.
     * @author Théo Cornu
     */
    public function GetAllByDashBoard(DashBoard $dashboards): ?array
    {
        try {
            $sql = 'SELECT * FROM task WHERE dashboard = ?';
            $Tasks = [];
            $result = $this->executerRequete($sql, [$dashboards->getUsername()]);
            while ($line = $result->fetch(PDO::FETCH_ASSOC)) {
                $Task = new Task(
                    $line['idTask'],
                    $line['Name'],
                    $line['Duration'],
                    $line['Date'],
                    $line['DashBoardidDashboard'],
                    
                );

                $Tasks[] = $Task;
            }
            return count($Tasks) > 0 ? $Tasks : null;
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving data.";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Retrieve a specific Task by its ID from the database.
     *
     * @param int $id The ID of the Task to retrieve.
     * @return Task|null The Task object, or null if not found.
     * @throws Exception
     */
    public function GetByID(int $id): ?Task
    {
        try {
            $sql = 'SELECT * FROM task WHERE idTask = ?';
            $result = $this->executerRequete($sql, [$id]);
            $line = $result->fetch(PDO::FETCH_ASSOC);
            $Task = new Task(
                $line['idTask'],
                $line['Name'],
                $line['Duration'],
                $line['Date'],
                $line['DashBoardidDashboard'],
                
            );
            return $Task;
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving data.";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Add a new Task to the database.
     *
     * @param Task $Task The Task to add.
     * @return Task The Task object, or null if not found.
     * @throws Exception
     */
    public function AddTask(Task $Task): Task
    {
        try {
            $sql = 'INSERT INTO task (Name, Duration, Date, DashBoardidDashboard) VALUES (:value1, :value2, :value3, :value4)';
            $this->executerRequete($sql, [
                ':value1' => $Task->getNameTask(),
                ':value2' => $Task->getDuration(),
                ':value3' =>  $Task->getDateAdded(),
                ':value4' =>  $Task->getIdDashBoard()
            ]);
            //$Task->setId($this->getLastInsertID());
            return $Task;
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while adding the Task.";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    
}
