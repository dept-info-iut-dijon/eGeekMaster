<?php
require_once 'Model.php';
require_once 'Login.php';

class LoginManager extends Model
{
    private PDO $_db;

    public function __construct() {
        
    }
    
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

    public function DeleteByID(int $id) : void {
        $sql = 'DELETE FROM login WHERE id = ?';
        $this->executerRequete($sql, [$id]);
    }

    public function UpdateById(int $id, string $username, string $password) : void {
        $sql = 'UPDATE login SET username = ?, password = ? WHERE id = ?';
        $this->executerRequete($sql,[$username, $password, $id]);
    }

    public function Add(string $username, string $password) : void {
        $sql = 'INSERT INTO login (username, password) VALUES (?, ?)';
        
        $this->executerRequete($sql, [$username, $password]);
    }
}
