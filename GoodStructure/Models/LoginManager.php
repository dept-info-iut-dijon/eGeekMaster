<?php
require_once 'Model.php';
require_once 'Login.php';

/**
 * Class LoginManager
 * @package GoodStructure\Models
 * @author Théo Cornu
 */
class LoginManager extends Model
{
    /**
     * LoginManager constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get all logins from the database
     * @return array
     * @author Théo Cornu
     */
    public function getAll() : array {
        $sql = 'SELECT * FROM login';
        $logins = [];
        $resultat = $this->executerRequete($sql);
        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $login = [
                'id' => $ligne['id'],
                'username' => $ligne['username'],
                'password' => $ligne['password']
            ];

            $logins[] = $login;
        }
        return $logins;
    }

    /**
     * Get a login by its ID
     * @param int $id
     * @return Login|null
     * @author Théo Cornu
     */
    public function getByID(int $id): ?Login {
        $sql = 'SELECT * FROM login WHERE id = ?';
        $resultat = $this->executerRequete($sql, [$id]);

        $ligne = $resultat->fetch();
        if ($ligne !== false) {
            $login = new Login(
                $ligne['id'],
                $ligne['username'],
                $ligne['password']
            );

            return $login;
        } else {
            return null;
        }
    }

    /**
     * Delete a login by its ID
     * @param int $id
     * @return void
     * @author Théo Cornu
     */
    public function DeleteByID(int $id) : void {
        $sql = 'DELETE FROM login WHERE id = ?';
        $this->executerRequete($sql, [$id]);
    }

    /**
     * Update a login by its ID
     * @param int $id
     * @param string $username
     * @param string $password
     */
    public function UpdateById(int $id, string $username, string $password) : void {
        $sql = 'UPDATE login SET username = ?, password = ? WHERE id = ?';
        $this->executerRequete($sql,[$username, $password, $id]);
    }

    /**
     * Add a new login to the database
     * @param string $username
     * @param string $password
     * @return Login
     */
    public function Add(string $username, string $password) : Login{
        $sql = 'INSERT INTO login (username, Hash) VALUES (?, ?)';
        $login = new Login($username, $password);
        $this->executerRequete($sql, [$username, $login->getHash()]);
        return $login;
    }
}
