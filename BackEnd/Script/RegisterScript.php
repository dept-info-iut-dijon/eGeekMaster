<?php
    declare(strict_types=1);
    session_start();

    require_once('../Class/Register.php');
    require_once('../Class/RegisterManager.php');
    $reg = new Register($_SESSION['Username'], $_SESSION['Password'], $_SESSION['FirstName'], $_SESSION['LastName'], $_SESSION['Email'], $_SESSION['Gender'], $_SESSION['FamilyPlace'], $_SESSION['BirthDate']);
    $reg->setPassword($reg->getHash());
    
    $dsn = "mysql:host=localhost;dbname=SAE3_soupape";
    $utilisateur = "root";
    $mot_de_passe = "";
    
    try {
        $pdo = new PDO($dsn, $utilisateur, $mot_de_passe);
    } catch (PDOException $e) {
        die("Error during the connection of the DataBase : " . $e->getMessage());
    }
    
    $regMan = new RegisterManager($pdo);
    
    // // Temp operation for test
    //$regMan->deleteAll();
    
    $regMan->add($reg);
    header("Location: ../../html/connection.html");
    exit;
?>