<?php
    declare(strict_types=1);
    session_start();

    require_once('../Class/Login.php');
    require_once('../Class/LoginManager.php');
    $log = new Login($_SESSION['Username'], $_SESSION['Password']);
    $log->setPassword($log->getHash());
    $log2 = new Login("","");
    
    $dsn = "mysql:host=localhost;dbname=SAE3_soupape";
    $utilisateur = "root";
    $mot_de_passe = "";
    
    try {
        $pdo = new PDO($dsn, $utilisateur, $mot_de_passe);
    } catch (PDOException $e) {
        die("Error during the connection of the DataBase : " . $e->getMessage());
    }
    
    $logMan = new LoginManager($pdo);

    $log2->hydrate($logMan->get($log->getLogin()));
   
    if($log2->verifyPassword($log->getHash()) == true)
    {
        header("Location: ../../html/page_accueil/index.html");
    }
    else
    {
        header("Location: ../../html/connection.html");
    }

    exit;
?>