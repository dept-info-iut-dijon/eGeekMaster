<?php
    class Register
    {
        private $_id;
        private $_login;
        private $_hash;
        private $_firstName;
        private $_lastName;
        private $_email;
        private $_gender;
        private $_familyPlace;
        private $_birthDate;

        public function __construct(string $login, string $password, string $firstName, string $lastName, string $email, string $gender, string $familyPlace, string $birthDate)
        {
            $this->_login = $login;
            $this->_firstName = $firstName;
            $this->_lastName = $lastName;
            $this->_email = $email;
            $this->_gender = $gender;
            $this->_familyPlace = $familyPlace;
            $this->_birthDate = $birthDate;
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

        // Getter for $_familyPlace
        public function getFamilyPlace() {
            return $this->_familyPlace;
        }

        // Setter for $_familyPlace
        public function setFamilyPlace($familyPlace) {
            $this->_familyPlace = $familyPlace;
        }

        // Getter for $_birthDate
        public function getBirthDate() {
            return $this->_birthDate;
        }

        // Setter for $_dateBirth
        public function setBirthDate($birthDate) {
            $this->_birthDate = $birthDate;
        }
        
    }

?>