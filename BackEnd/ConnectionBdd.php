<?php
    // Utilisation de la classe avec la fonction setDb
    $maClasse = new MaClasse();
    $pdo = new PDO('mysql:host=localhost;dbname=grp-307_s2_prjtut', 'grp-307', 'kmzkmz512');
    $maClasse->setDb($pdo);
?>