<?php

    public class RegisterManager()
    {
        private $_db;

        public function __construct(PDO $db)
        {
            $this->_db = $db;
        }

        public function setDb(PDO $db);
        {
            $this->_db = $db;
        }

        public function add(Register $register)
        { 
            $connection  = $_db;
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {

                $request = $connexion->prepare("INSERT INTO login (id) VALUES (:value1)");
                
                $requete->bindParam(':value1', $register->getLogin());
                
                $request->execute();
                
            } catch (PDOException $e) {
                echo "error during insertion of login: " . $e->getMessage();
            }

            try {

                $request = $connexion->prepare("INSERT INTO users (LastName, FirstName, Gender, BirthDate, Email, FamilyPlace) VALUES (:value1, :value2, :value3, :value4, :value5, :value6)");
                
                $requete->bindParam(':value1', $register->getLastName());
                $requete->bindParam(':value2', $register->getFirstName());
                $requete->bindParam(':value3', $register->getGender());
                $requete->bindParam(':value4', $register->getBirthDate());
                $requete->bindParam(':value5', $register->getEmail());
                $requete->bindParam(':value6', $register->getFamilyPlace());

                $request->execute()
                
            } catch (PDOException $e) {
                echo "error during insertion of users: " . $e->getMessage();
            }

            try {

                $request = $connexion->prepare("INSERT INTO users (LoginIdLogin, Login_Hash) VALUES ((SELECT idLogin from login where id = '" . $register->GetLogin() . "',:value1)");
                
                $requete->bindParam(':value1', $register->getLogin());

                $request->execute();
                
            } catch (PDOException $e) {
                echo "error during insertion of login in users : " . $e->getMessage();
            }  
        }
    }

?>