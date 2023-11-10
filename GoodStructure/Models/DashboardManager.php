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
    private $UserManager;
    private $dashboard;


    public function __construct()
    {
        parent::__construct();
        $this->UserManager = new UserManager();
        $this->dashboard = new DashBoard();
    }

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
            
            $this->dashboard->setUsername($username);
           
            
            return $this->dashboard;
        }
        catch(Exception $e){
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while adding the dashboard.";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Retrieve a specific the id of a dashboard by its Useriduser from the database.
     * 
     * @param int $idUser The id of the user linked to the dashboard to retrieve.
     * @return int|null The id of the dashboard, or null if not found.
     * @throws Exception
     */
    public function GetIdDashboardByUserId(int $idUser): ?int
    {
        try {
            $sql = 'SELECT idDashBoard FROM dashboard WHERE UseridUser = ?';
            $result = $this->executerRequete($sql, [$idUser]);
            $line = $result->fetch(PDO::FETCH_ASSOC);
            return $line['idDashBoard'];
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving data(DashBoard).";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }


    /**
     * Retrieve a specific Dashboard by the id of the user linked from the database.
     *
     * @param int $idUser The id of the user linked to the dashboard to retrieve.
     * @return DashBoard|null The Dashboard object, or null if not found.
     * @throws Exception
     */
    public function GetByUserId(int $idUser): ?DashBoard
    {
        try {
            $idUser = $this->UserManager->GetIdUserByLoginId(intval($_SESSION["IdLogin"]));
            
            $sql = 'INSERT INTO dashboard (UseridUser) VALUES (?)';
            $this->executerRequete($sql, [$idUser]);
            
            $sql = 'SELECT * FROM dashboard WHERE UseridUser = ?';
            $result = $this->executerRequete($sql, [$idUser]);
            $line = $result->fetch(PDO::FETCH_ASSOC);
            var_dump($line);
            var_dump($idUser);
            $this->dashboard->setId($line['idDashBoard']);
            $this->dashboard->setUsername($line['username']);
            $this->dashboard->setIdUser($line['UseridUser']);
            
            return $this->dashboard;
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving data(DashBoard).";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Delete a specific Dashboard by its id.
     *
     * @param int $id The id of the Dashboard to retrieve.
     * @throws Exception
     */
    public function DeleteByID(int $id): void
    {
        try {
            $sql = 'DELETE FROM dashboard WHERE idDashboard = ?';
            $this->executerRequete($sql, [$id]);
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while deleting the dashboard.";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Update a Dashboard in the database with new information.
     *
     * @param Dashboard $dashboard The updated Dashboard.
     * @throws Exception
     */
    public function UpdateDashboard(Dashboard $dashboard): void
    {
        try {
            $idUser = $this->UserManager->GetIdUserByLoginId( intval($_SESSION["IdLogin"]))-1;
            
            $sql = 'UPDATE dashboard SET username = ? UseridUser = ? WHERE idDashboard = ?';
            $this->executerRequete($sql, [
                $dashboard->getUsername(),
                $idUser,
                $dashboard->getId()
            ]);
            $id = $this->GetIdDashboardByUserId($idUser);
            $this->dashboard->setId($id);
            $this->dashboard->setIdUser($idUser);
            

        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while updating the Dashboard.";
            header("Location: index.php?action=Dashboard&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }
}