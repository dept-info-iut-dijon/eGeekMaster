<?php
require_once 'Model.php';
require_once 'DashBoard.php';
require_once 'TaskManager.php';
require_once 'UserManager.php';

/**
 * Class DashBoardManager
 * @package GoodStructure\Models
 * @author Théo Cornu
 */
class DashBoardManager extends Model
{

    /**
     * Add a new Dashboard to the database.
     *
     * @param string $username The name of dashboard to add.
     * @author Théo Cornu
     */
    public function Add(string $username) : DashBoard{
        try{
            $sql = 'INSERT INTO dashboard (username) VALUES (?)';
            $this->executerRequete($sql, [$username]);
            $dashboard = new DashBoard($username);
            return $dashboard;
        }
        catch(Exception $e){
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while adding the dashboard.";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Retrieve a specific the id of a dashboard by its idtasks from the database.
     * 
     * @param string $idTask The name of the dashboard to retrieve.
     * @return int|null The id of the dashboard, or null if not found.
     * @throws Exception
     */
    public function GetIdDashBoardByIdTask(string $idTask): ?int
    {
        try {
            $sql = 'SELECT DashBoardidDashboard FROM task WHERE idTask = ?';
            $result = $this->executerRequete($sql, [$idTask]);
            $line = $result->fetch(PDO::FETCH_ASSOC);
            $idDashBoard = $line['DashBoardidDashboard'];
            return $idDashBoard;
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving data.";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }
}