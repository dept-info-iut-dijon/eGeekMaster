<?php
require_once 'Model.php';
require_once 'Pokemon.php';

class PokemonManager extends Model {
    // Attributs
    private PDO $db;

    

    // Renvoie la liste des pokemons
    public function getAll() : array {
        $sql = 'SELECT * FROM pokemon';
        $pokemons = [];
        $resultat = $this->executerRequete($sql);
        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $pokemon = new Pokemon(
                $ligne['idPokemon'],
                $ligne['nomEspece'],
                $ligne['TypeOne'],
                $ligne['TypeTwo'],
                $ligne['description'],
                $ligne['urlImg']
            );
    
            $pokemons[] = $pokemon;
        }
        return $pokemons;
    }

    // Renvoie les informations sur un pokemon
    public function getByID(int $id): ?Pokemon {
        $sql = 'SELECT * FROM pokemon WHERE idPokemon = ?';
        $resultat = $this->executerRequete($sql, [$id]);
        $ligne = $resultat->fetch();
        if ($ligne !== false) {
            $pokemon = new Pokemon(
                $ligne['idPokemon'],
                $ligne['nomEspece'],
                $ligne['TypeOne'],
                $ligne['TypeTwo'],
                $ligne['description'],
                $ligne['urlImg']
            );

            return $pokemon;
        } else {
            return null;
        }
    }

    // Supprime un pokemon
    public function deleteByID(int $id) : void {
        $sql = 'DELETE FROM pokemon WHERE idPokemon = ?';
        $this->executerRequete($sql, [$id]);
    }

    // Modifier un pokemon
    public function updateByID(int $id, string $nomEspece, string $description, string $typeOne, string $typeTwo, string $urlImg) : void {
        $sql = 'UPDATE pokemon SET nomEspece = ?, description = ?, TypeOne = ?, TypeTwo = ?, urlImg = ? WHERE idPokemon = ?';
        $this->executerRequete($sql, [$nomEspece, $description, $typeOne, $typeTwo, $urlImg, $id]);
    }

    // Ajoute un pokemon
    public function add(string $nomEspece, string $description, string $typeOne, string $typeTwo, string $urlImg) : void {
        $sql = 'INSERT INTO pokemon (nomEspece, description, TypeOne, TypeTwo, urlImg) VALUES (?, ?, ?, ?, ?)';
        $this->executerRequete($sql, [$nomEspece, $description, $typeOne, $typeTwo, $urlImg]);
    }

    // Modifier le type d'un pokemon
    public function updateTypeByID(int $id, string $typeOne, string $typeTwo) : void {
        $sql = 'UPDATE pokemon SET TypeOne = ?, TypeTwo = ? WHERE idPokemon = ?';
        $this->executerRequete($sql, [$typeOne, $typeTwo, $id]);
    }

    // Renvoie les propriétés d'un pokemon
    public function getPokemonProperties() : array {
        $sql = 'SELECT * FROM pokemon';
        $resultat = $this->executerRequete($sql);
        $pokemonProperties = [];
        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $pokemonProperties[] = $ligne;
        }
        return $pokemonProperties;
    }
}