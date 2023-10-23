<?php

require_once 'Model.php';
require_once 'Register.php';

    class RegisterManager extends Model
    {
        private PDO $_db;

        public function add(Register $register)
        { 
            $connection  = $this->_db;
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {

                $request = $connection->prepare("INSERT INTO login (id, hash) VALUES (:value1, :value2)");
                
                $value1 = $register->getLogin();
                $value2 = $register->getHash();

                $request->bindParam(':value1', $value1);
                $request->bindParam(':value2', $value2);
                
                $request->execute();
                
            } catch (PDOException $e) {
                echo "error during insertion of login: " . $e->getMessage() . "<br>";
            }

            try {

                $request = $connection->prepare("INSERT INTO users (LastName, FirstName, Gender, BirthDate, Email, FamilyPlace, LoginidLogin) VALUES (:value1, :value2, :value3, :value4, :value5, :value6, (SELECT idLogin from login where id = :value7))");
                
                $value1 = $register->getLastName();
                $value2 = $register->getFirstName();
                $value3 = $register->getGender();
                $value4 = $register->getBirthDate();
                $value5 = $register->getEmail();
                $value6 = $register->getFamilyPlace();
                $value7 = $register->getLogin();

                $request->bindParam(':value1', $value1);
                $request->bindParam(':value2', $value2);
                $request->bindParam(':value3', $value3);
                $request->bindParam(':value4', $value4);
                $request->bindParam(':value5', $value5);
                $request->bindParam(':value6', $value6);
                $request->bindParam(':value7', $value7);

                $request->execute();
                
            } catch (PDOException $e) {
                echo "error during insertion of users: " . $e->getMessage() . "<br>";
            }
        }


        // Only for testing
        public function deleteAll()
        {
            $connection  = $this->_db;
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {

                $request = $connection->prepare("DELETE FROM users");
                
                $request->execute();
                
            } catch (PDOException $e) {
                echo "error during deletion of users: " . $e->getMessage() . "<br>";
            }

            try {

                $request = $connection->prepare("DELETE FROM login");
                
                $request->execute();
                
            } catch (PDOException $e) {
                echo "error during deletion of login: " . $e->getMessage() . "<br>";
            }
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
        
    }

?>