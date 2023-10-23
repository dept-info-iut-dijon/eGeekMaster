<?php
require_once 'Model.php';
require_once 'Login.php';

class LoginManager extends Model
{
    private PDO $_db;

    
    public function getAll() : array {
        $sql = 'SELECT * FROM login';
        $logins = [];
        $resultat = $this->_db->query($sql);
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
        $resultat = $this->_db->prepare($sql);
        $resultat->execute([$id]);
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

    public function deleteByID(int $id) : void {
        $sql = 'DELETE FROM login WHERE id = ?';
        $resultat = $this->_db->prepare($sql);
        $resultat->execute([$id]);
    }

    public function updateByID(int $id, string $username, string $password) : void {
        $sql = 'UPDATE login SET username = ?, password = ? WHERE id = ?';
        $resultat = $this->_db->prepare($sql);
        $resultat->execute([$username, $password, $id]);
    }

    public function add(string $username, string $password) : void {
        $sql = 'INSERT INTO login (username, password) VALUES (?, ?)';
        $resultat = $this->_db->prepare($sql);
        $resultat->execute([$username, $password]);
    }
}
