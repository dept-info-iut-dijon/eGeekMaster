<?php

require_once 'Model.php';
require_once 'Register.php';

    class RegisterManager extends Model
    {

        // Renvoie la liste des Register
        public function GetAll() : array{
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

        // Renvoie un Register spécifique par son id
        
        public function GetByID(int $id): ?Register {
            $sql = 'SELECT * FROM register WHERE id = ?';
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
            $sql = 'DELETE FROM register WHERE id = ?';
            $this->executerRequete($sql, [$id]);
        }

        // Update un Register par son id
        public function UpdateById(int $id, string $username, string $password) : void{
            $sql = 'UPDATE register SET username = ?, password = ? WHERE id = ?';
            $this->executerRequete($sql,[$username, $password, $id]);
        }

        // Add un Register
        public function AddRegister(Register $register) : void{
            $sql = ("INSERT INTO users (LastName, FirstName, Gender, BirthDate, Email, FamilyPlace, LoginidLogin) VALUES (:value1, :value2, :value3, :value4, :value5, :value6, (SELECT idLogin from login where id = :value7))");
                
            $value1 = $register->getLastName();
            $value2 = $register->getFirstName();
            $value3 = $register->getGender();
            $value4 = $register->getBirthDate();
            $value5 = $register->getEmail();
            $value6 = $register->getFamilyPlace();
            $value7 = $register->getLogin();
            var_dump($value1, $value2, $value3, $value4, $value5, $value6, $value7);
            $this->executerRequete($sql, [$value1, $value2, $value3, $value4, $value5, $value6, $value7]);
        }

        // Update un Register en prenant en compte un Register
        public function UpdateRegister(Register $register) : void {
            $sql = 'UPDATE register SET login = ?, password = ?, firstName = ?, lastName = ?, email = ?, gender = ?, familyPlace = ?, birthDate = ? WHERE id = ?';
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