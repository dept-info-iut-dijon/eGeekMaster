<?php
class Pokemon {
    private int $idPokemon;
    private string $nomEspece;
    private string $TypeOne;
    private ?string $TypeTwo;
    private ?string $description;
    private ?string $urlImg;

    public function __construct(int $idPokemon, string $nomEspece, string $TypeOne, ?string $TypeTwo, ?string $description, ?string $urlImg) {
        if ($idPokemon !== null) {
            $this->idPokemon = $idPokemon;
        }
        $this->nomEspece = $nomEspece;
        $this->TypeOne = $TypeOne;
        $this->TypeTwo = $TypeTwo;
        $this->description = $description;
        $this->urlImg = $urlImg;
    }

    public function getIdPokemon(): int {
        return $this->idPokemon;
    }

    public function setIdPokemon(int $idPokemon): void {
        $this->idPokemon = $idPokemon;
    }

    public function getNomEspece(): string {
        return $this->nomEspece;
    }

    public function setNomEspece(string $nomEspece): void {
        $this->nomEspece = $nomEspece;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(?string $description): void {
        $this->description = $description;
    }

    public function getTypeOne(): string {
        return $this->TypeOne;
    }

    public function setTypeOne(string $TypeOne): void {
        $this->TypeOne = $TypeOne;
    }

    public function getTypeTwo(): ?string {
        return $this->TypeTwo;
    }

    public function setTypeTwo(?string $TypeTwo): void {
        $this->TypeTwo = $TypeTwo;
    }

    public function getUrlImg(): ?string {
        return $this->urlImg;
    }

    public function setUrlImg(?string $urlImg): void {
        $this->urlImg = $urlImg;
    }

    public static function hydrate(array $data): Pokemon {
        $pokemon = new Pokemon(
            $data['idPokemon'],
            $data['nomEspece'],
            isset($data['description']) ? $data['description'] : null,
            $data['TypeOne'],
            isset($data['TypeTwo']) ? $data['TypeTwo'] : null,
            isset($data['urlImg']) ? $data['urlImg'] : null
        );
        return $pokemon;
    }
    public function toString(): string {
        $result = "ID Pokemon: " . $this->getIdPokemon() . "\n";
        $result .= "Nom de l'espèce: " . $this->getNomEspece() . "\n";
        $result .= "Description: " . ($this->getDescription() ?? 'N/A') . "\n";
        $result .= "Type One: " . $this->getTypeOne() . "\n";
        $result .= "Type Two: " . ($this->getTypeTwo() ?? 'N/A') . "\n";
        $result .= "URL de l'image: " . ($this->getUrlImg() ?? 'N/A') . "\n";
        return $result;
    }
    
}
