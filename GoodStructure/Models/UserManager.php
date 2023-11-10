<?php
// This file manages all operations related to User (registration) directly with the database.
require_once 'Model.php';
require_once 'User.php';
require_once 'LoginManager.php';

class UserManager extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retrieve a list of Users from the database.
     *
     * @return array An array of User objects.
     * @author Théo Cornu
     */
    
    public function GetAll(): array
    {
        try {
            $sql = 'SELECT * FROM users';
            $Users = [];
            $result = $this->executerRequete($sql);
            while ($line = $result->fetch(PDO::FETCH_ASSOC)) {
                $User = new User(
                    $line['login'],
                    $line['password'],
                    $line['firstName'],
                    $line['lastName'],
                    $line['email'],
                    $line['gender'],
                    $line['familyPlace'],
                    $line['birthDate']
                );

                $Users[] = $User;
            }
            return $Users;
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving data.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Retrieve a specific User by its LoginID from the database.
     *
     * @param int $id The LoginID of the User to retrieve.
     * @return User|null The User object, or null if not found.
     * @author Théo Cornu
     */
    public function GetByLoginID(int $id): ?User
    {
        try {
            $sql = 'SELECT * FROM users WHERE LoginidLogin = ?';
            $result = $this->executerRequete($sql, [$id]);
            $line = $result->fetch();
            if ($line !== false) {
                $User = new User(
                    $line['login'],
                    $line['password'],
                    $line['firstName'],
                    $line['lastName'],
                    $line['email'],
                    $line['gender'],
                    $line['familyPlace'],
                    $line['birthDate']
                );

                return $User;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving the User.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Delete a User by its ID.
     *
     * @param int $id The ID of the User to delete.
     * @author Théo Cornu
     */
    public function DeleteByID(int $id): void
    {
        try {
            $sql = 'DELETE FROM users WHERE idUsers = ?';
            $this->executerRequete($sql, [$id]);
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while deleting the User.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Update a User by its ID with a new username and password.
     *
     * @param int $id The ID of the User to update.
     * @param string $username The new username.
     * @param string $password The new password.
     * @author Théo Cornu
     */
    public function UpdateById(int $id, string $username, string $password): void
    {
        try {
            $sql = 'UPDATE users SET username = ?, password = ? WHERE idUsers = ?';
            $this->executerRequete($sql, [$username, $password, $id]);
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while updating the User.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Add a new User to the database.
     *
     * @param User $User The User to add.
     * @author Théo Cornu
     */
    public function AddUser(User $User): void
    {
        try {
            // Add a login associated with the User
            $loginManager = new LoginManager();
            $login = $loginManager->Add($User->getLogin(), $User->getPassword());

            // Get the ID of the last login added
            $sql = 'SELECT idLogin FROM login ORDER BY idLogin DESC LIMIT 1';
            $result = $this->executerRequete($sql);
            $line = $result->fetch();
            $login->setId($line['idLogin']);

            $sql = ("INSERT INTO users (LastName, FirstName, Gender, BirthDate, Email, FamilyPlace, LoginidLogin) 
            VALUES (:value1, :value2, :value3, :value4, :value5, :value6, (SELECT idLogin from login where idLogin = :value7))");

            $value1 = $User->getLastName();
            $value2 = $User->getFirstName();
            $value3 = $User->getGender();
            $value4 = $User->getBirthDate();
            $value5 = $User->getEmail();
            $value6 = $User->getFamilyPlace();
            $value7 = $login->getId();
            $this->executerRequete($sql, [
                ':value1' => $value1,
                ':value2' => $value2,
                ':value3' => $value3,
                ':value4' => $value4,
                ':value5' => $value5,
                ':value6' => $value6,
                ':value7' => $value7
            ]);

            // header("Refresh : 1, Location: index.php?action=Index");

        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while adding the User.";
            if (strpos($e->getMessage(), "Duplicate entry") !== false) {
                $errorMessage = "The email address or username is already in use.";
            }

            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Update a User in the database with new information.
     *
     * @param User $User The updated User.
     * @author Théo Cornu
     */
    public function UpdateUser(User $User): void
    {
        try {
            $sql = 'UPDATE users SET login = ?, password = ?, firstName = ?, lastName = ?, email = ?, gender = ?, familyPlace = ?, birthDate = ? WHERE idUsers = ?';
            $this->executerRequete($sql, [
                $User->getLogin(),
                $User->getPassword(),
                $User->getFirstName(),
                $User->getLastName(),
                $User->getEmail(),
                $User->getGender(),
                $User->getFamilyPlace(),
                $User->getBirthDate(),
                $User->getId()
            ]);
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while updating the User.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Retrieve a specific idDashboard by its userID from the database.
     *
     * @param int $id The userID of the User to retrieve.
     * @return int|null The id of the Dashboard, or null if not found.
     * @throws Exception
     */
    public function GetIdDashBoardByUserId(int $id): ?int
    {
        try {
            $sql = 'SELECT idDashBoard FROM users WHERE idUsers = ?';
            $result = $this->executerRequete($sql, [$id]);
            $line = $result->fetch(PDO::FETCH_ASSOC);
            return $line['idDashBoard'];
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving data(idDashBoard).";
            header("Location: index.php?action=Index&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }
}
?>
