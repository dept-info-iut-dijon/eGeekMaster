<?php

    class LoginManager
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

        public function get(string $login) : ?array
        { 
            $connection  = $this->_db;
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {

                $request = $connection->prepare("SELECT * FROM login where id = :value1");
                
                $value1 = $login;

                $request->bindParam(':value1', $value1);
                
                $request->execute();

                $ret = $request->fetch(PDO::FETCH_ASSOC);
                
                return $ret;
            } catch (PDOException $e) {
                echo "error during request of login: " . $e->getMessage() . "<br>";
                return null;
            }
        }
    }

?>