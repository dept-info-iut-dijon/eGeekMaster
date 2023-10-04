<?php

    session_start();
    declare(strict_types=1);
    require_once('Register.php');
    require_once('RegisterManager.php');
    $reg = new Register($_SESSION['Username'], $_SESSION['Password'], $_SESSION['FirstName'], $_SESSION['LastName'], $_SESSION['Email'], $_SESSION['Gender'], $_SESSION['FamilyPlace'], $_SESSION['BirthDate']);
    $reg->setPassword($reg->getHash());
    
    $dsn = "mysql:host=localhost;dbname=grp-307_s2_prjtut";
    $utilisateur = "grp-307";
    $mot_de_passe = "zIcshT24";
    
    try {
        $pdo = new PDO($dsn, $utilisateur, $mot_de_passe);
    } catch (PDOException $e) {
        die("Error during the connection of the DataBase : " . $e->getMessage());
    }
    
    $regMan = new RegisterManager($pdo);
    
    // Temp operation for test
    $regMan->deleteAll();
    
    $regMan->add($reg);
?>