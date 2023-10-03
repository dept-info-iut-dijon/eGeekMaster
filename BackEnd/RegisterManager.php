<?php

    class RegisterManager
    {
        private $_db;

        public function __construct(PDO $db)
        {
            $this->_db = $db;
        }

        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }

        public function add(Register $register)
        { 
            $connection  = $this->_db;
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {

                $request = $connection->prepare("INSERT INTO login (id) VALUES (:value1)");
                
                $value1 = $register->getLogin();

                $request->bindParam(':value1', $value1);
                
                $request->execute();
                
            } catch (PDOException $e) {
                echo "error during insertion of login: " . $e->getMessage();
            }

            try {

                $request = $connection->prepare("INSERT INTO users (LastName, FirstName, Gender, BirthDate, Email, FamilyPlace) VALUES (:value1, :value2, :value3, :value4, :value5, :value6)");
                
                $value1 = $register->getLastName();
                $value2 = $register->getFirstName();
                $value3 = $register->getGender();
                $value4 = $register->getBirthDate();
                $value5 = $register->getEmail();
                $value6 = $register->getFamilyPlace();

                $request->bindParam(':value1', $value1);
                $request->bindParam(':value2', $value2);
                $request->bindParam(':value3', $value3);
                $request->bindParam(':value4', $value4);
                $request->bindParam(':value5', $value5);
                $request->bindParam(':value6', $value6);

                $request->execute();
                
            } catch (PDOException $e) {
                echo "error during insertion of users: " . $e->getMessage();
            }

            try {

                $request = $connection->prepare("INSERT INTO users (LoginIdLogin, Login_Hash) VALUES ((SELECT idLogin from login where id = '" . $register->GetLogin() . "',:value1)");
                
                $value1 = $register->getHash();

                $request->bindParam(':value1', $value1);

                $request->execute();
                
            } catch (PDOException $e) {
                echo "error during insertion of login in users : " . $e->getMessage();
            }  
        }
    }

?>