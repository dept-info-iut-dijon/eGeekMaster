<?php
// This file manages all operations related to Register (registration) directly with the database.
require_once 'Model.php';
require_once 'Register.php';
require_once 'LoginManager.php';

class RegisterManager extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retrieve a list of Registers from the database.
     *
     * @return array An array of Register objects.
     * @author Théo Cornu
     */
    
    public function GetAll(): array
    {
        try {
            $sql = 'SELECT * FROM users';
            $registers = [];
            $result = $this->executerRequete($sql);
            while ($line = $result->fetch(PDO::FETCH_ASSOC)) {
                $register = new Register(
                    $line['login'],
                    $line['password'],
                    $line['firstName'],
                    $line['lastName'],
                    $line['email'],
                    $line['gender'],
                    $line['familyPlace'],
                    $line['birthDate']
                );

                $registers[] = $register;
            }
            return $registers;
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving data.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Retrieve a specific Register by its ID from the database.
     *
     * @param int $id The ID of the Register to retrieve.
     * @return Register|null The Register object, or null if not found.
     * @author Théo Cornu
     */
    public function GetByID(int $id): ?Register
    {
        try {
            $sql = 'SELECT * FROM users WHERE idUsers = ?';
            $result = $this->executerRequete($sql, [$id]);
            $line = $result->fetch();
            if ($line !== false) {
                $register = new Register(
                    $line['login'],
                    $line['password'],
                    $line['firstName'],
                    $line['lastName'],
                    $line['email'],
                    $line['gender'],
                    $line['familyPlace'],
                    $line['birthDate']
                );

                return $register;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while retrieving the Register.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Delete a Register by its ID.
     *
     * @param int $id The ID of the Register to delete.
     * @author Théo Cornu
     */
    public function DeleteByID(int $id): void
    {
        try {
            $sql = 'DELETE FROM users WHERE idUsers = ?';
            $this->executerRequete($sql, [$id]);
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while deleting the Register.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Update a Register by its ID with a new username and password.
     *
     * @param int $id The ID of the Register to update.
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
            $errorMessage = "An error occurred while updating the Register.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Add a new Register to the database.
     *
     * @param Register $register The Register to add.
     * @author Théo Cornu
     */
    public function AddRegister(Register $register): void
    {
        try {
            // Add a login associated with the Register
            $loginManager = new LoginManager();
            $login = $loginManager->Add($register->getLogin(), $register->getPassword());

            // Get the ID of the last login added
            $sql = 'SELECT idLogin FROM login ORDER BY idLogin DESC LIMIT 1';
            $result = $this->executerRequete($sql);
            $line = $result->fetch();
            $login->setId($line['idLogin']);

            $sql = ("INSERT INTO users (LastName, FirstName, Gender, BirthDate, Email, FamilyPlace, LoginidLogin) 
            VALUES (:value1, :value2, :value3, :value4, :value5, :value6, (SELECT idLogin from login where idLogin = :value7))");

            $value1 = $register->getLastName();
            $value2 = $register->getFirstName();
            $value3 = $register->getGender();
            $value4 = $register->getBirthDate();
            $value5 = $register->getEmail();
            $value6 = $register->getFamilyPlace();
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

            header("Refresh : 1, Location: index.php?action=Index");

        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while adding the Register.";
            if (strpos($e->getMessage(), "Duplicate entry") !== false) {
                $errorMessage = "The email address or username is already in use.";
            }

            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }

    /**
     * Update a Register in the database with new information.
     *
     * @param Register $register The updated Register.
     * @author Théo Cornu
     */
    public function UpdateRegister(Register $register): void
    {
        try {
            $sql = 'UPDATE users SET login = ?, password = ?, firstName = ?, lastName = ?, email = ?, gender = ?, familyPlace = ?, birthDate = ? WHERE idUsers = ?';
            $this->executerRequete($sql, [
                $register->getLogin(),
                $register->getPassword(),
                $register->getFirstName(),
                $register->getLastName(),
                $register->getEmail(),
                $register->getGender(),
                $register->getFamilyPlace(),
                $register->getBirthDate(),
                $register->getId()
            ]);
        } catch (PDOException $e) {
            // In case of an error, redirect to the error page with a message
            $errorMessage = "An error occurred while updating the Register.";
            header("Location: index.php?action=Registration&errorMessage=".urlencode($errorMessage));
            exit();
        }
    }
}
?>
