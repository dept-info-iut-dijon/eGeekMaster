<?php

require_once 'Model.php';
require_once 'Register.php';

    class RegisterManager extends Model
    {
        private PDO $_db;

        public function __construct()
        {
           
        }

        // Renvoie la liste des Register
        public function getAll() : array{
            $sql = 'SELECT * FROM register';
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

        // Delete un Register par son id
        public function deleteByID(int $id) : void{
            $sql = 'DELETE FROM register WHERE id = ?';
            $this->executerRequete($sql, [$id]);
        }

        // Update un Register par son id
        public function updateById(int $id, string $username, string $password) : void{
            $sql = 'UPDATE register SET username = ?, password = ? WHERE id = ?';
            $this->executerRequete($sql,[$username, $password, $id]);
        }

        // Add un Register
        public function add(Register $register) : void{
            $sql = ("INSERT INTO users (LastName, FirstName, Gender, BirthDate, Email, FamilyPlace, LoginidLogin) VALUES (:value1, :value2, :value3, :value4, :value5, :value6, (SELECT idLogin from login where id = :value7))");
                
            $value1 = $register->getLastName();
            $value2 = $register->getFirstName();
            $value3 = $register->getGender();
            $value4 = $register->getBirthDate();
            $value5 = $register->getEmail();
            $value6 = $register->getFamilyPlace();
            $value7 = $register->getLogin();

            $this->executerRequete($sql, [$value1, $value2, $value3, $value4, $value5, $value6, $value7]);
        }
        
    }

?>