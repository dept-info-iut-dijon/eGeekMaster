<?php
    public class Register()
    {
        $_id;
        $_login;
        $_hash;
        $_firstName;
        $_lastName;
        $_email;
        $_gender;
        $_placeFamily;
        $_dateBirth;

        public function __construct(string $login, string $password, string $firstName, string $lastName, string $email, string $gender, string $placeFamily, string $dateBirth)
        {
            $this->_login = $login;
            $this->_firstName = $firstName;
            $this->_lastName = $lastName;
            $this->_email = $email;
            $this->_gender = $gender;
            $this->_placeFamily = $placeFamily;
            $this->_dateBirth = $dateBirth;
            $this->_hash = $password;
        }
    }

?>