<?php
    public class Register()
    {
        private $_id;
        private $_login;
        private $_hash;
        private $_firstName;
        private $_lastName;
        private $_email;
        private $_gender;
        private $_placeFamily;
        private $_dateBirth;

        public function __construct(string $login, string $password, string $firstName, string $lastName, string $email, string $gender, string $placeFamily, string $dateBirth)
        {
            $this->_login = $login;
            $this->_firstName = $firstName;
            $this->_lastName = $lastName;
            $this->_email = $email;
            $this->_gender = $gender;
            $this->_placeFamily = $placeFamily;
            $this->_dateBirth = $dateBirth;
            $this->_hash = hash("sha256", $password);
        }

        // Getter for $_login
        public function getLogin() {
            return $this->_login;
        }

        // Setter for $_login
        public function setLogin($login) {
            $this->_login = $login;
        }

        // Getter for $_hash
        public function getHash() {
            return $this->_hash;
        }

        // Setter for $_hash
        public function setHash($hash) {
            $this->_hash = $hash;
        }

        // Getter for $_firstName
        public function getFirstName() {
            return $this->_firstName;
        }

        // Setter for $_firstName
        public function setFirstName($firstName) {
            $this->_firstName = $firstName;
        }

        // Getter for $_lastName
        public function getLastName() {
            return $this->_lastName;
        }

        // Setter for $_lastName
        public function setLastName($lastName) {
            $this->_lastName = $lastName;
        }

        // Getter for $_email
        public function getEmail() {
            return $this->_email;
        }

        // Setter for $_email
        public function setEmail($email) {
            $this->_email = $email;
        }

        // Getter for $_gender
        public function getGender() {
            return $this->_gender;
        }

        // Setter for $_gender
        public function setGender($gender) {
            $this->_gender = $gender;
        }

        // Getter for $_placeFamily
        public function getPlaceFamily() {
            return $this->_placeFamily;
        }

        // Setter for $_placeFamily
        public function setPlaceFamily($placeFamily) {
            $this->_placeFamily = $placeFamily;
        }

        // Getter for $_dateBirth
        public function getDateBirth() {
            return $this->_dateBirth;
        }

        // Setter for $_dateBirth
        public function setDateBirth($dateBirth) {
            $this->_dateBirth = $dateBirth;
        }
        
    }

?>