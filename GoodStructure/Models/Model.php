<?php
require_once 'Config.php';
abstract class Model {
    private ?PDO $db = null;

    // Exécute une requête SQL éventuellement paramétrée
    protected function executerRequete(string $sql, array $params = null) : PDOStatement|false{
        if ($params == null) {
            $resultat = $this->getDB()->query($sql);    // exécution directe
        }
        else {
            $resultat = $this->getDB()->prepare($sql);  // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }

    // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
    private function getDB(): PDO {
        if ($this->db === null) {
            try {
                $host_db = Config::get('DB.dsn');
                $user = Config::get('DB.user');
                $pass = Config::get('DB.pass');
                $this->db = new PDO($host_db, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                die('Erreur de connexion à la base de données : ' . $e->getMessage());
            }
        }
        return $this->db;
    }
}