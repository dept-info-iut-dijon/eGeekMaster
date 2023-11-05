<?php

require_once 'Model.php';
require_once 'Register.php';
require_once 'Login.php';

    class RegisterManager extends Model
    {

        public function __construct()
        {
            parent::__construct();
        }

        // Renvoie la liste des Register
        public function GetAll() : array{
            $sql = 'SELECT * FROM users';
            $registers = [];
            $resultat = $this->executerRequete($sql);
            while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $register = new Register(
                    $ligne['login'],
                    $ligne['password'],
                    $ligne['firstName'],
                    $ligne['lastName'],
                    $ligne['email'],
                    $ligne['gender'],
                    $ligne['familyPlace'],
                    $ligne['birthDate']
                );
                
                $registers[] = $register;
            }
            return $registers;
        }

        // Renvoie un Register spécifique par son id
        
        public function GetByID(int $id): ?Register {
            $sql = 'SELECT * FROM users WHERE idUsers = ?';
            $resultat = $this->executerRequete($sql, [$id]);
            $ligne = $resultat->fetch();
            if ($ligne !== false) {
                $register = new Register(
                    $ligne['login'],
                    $ligne['password'],
                    $ligne['firstName'],
                    $ligne['lastName'],
                    $ligne['email'],
                    $ligne['gender'],
                    $ligne['familyPlace'],
                    $ligne['birthDate']
                );
    
                return $register;
            } else {
                return null;
            }
        }

        // Delete un Register par son id
        public function DeleteByID(int $id) : void{
            $sql = 'DELETE FROM users WHERE idUsers = ?';
            $this->executerRequete($sql, [$id]);
        }

        // Update un Register par son id
        public function UpdateById(int $id, string $username, string $password) : void{
            $sql = 'UPDATE users SET username = ?, password = ? WHERE idUsers = ?';
            $this->executerRequete($sql,[$username, $password, $id]);
        }

        // Add un Register
        public function AddRegister(Register $register) : void{

            $sql = 'INSERT INTO login (username, Hash) VALUES (?, ?)';
            $login = new Login($register->getLogin(), $register->getPassword());
            $this->executerRequete($sql, [$login->getLogin(), $login->getHash()]);

            // Get the ID of the id of the last login added
            $sql = 'SELECT idLogin FROM login ORDER BY idLogin DESC LIMIT 1';
            $resultat = $this->executerRequete($sql);
            $ligne = $resultat->fetch();
            $login->setId($ligne['idLogin']);
            


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
        }

        // Update un Register en prenant en compte un Register
        public function UpdateRegister(Register $register) : void {
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
        }
        
    }

?>