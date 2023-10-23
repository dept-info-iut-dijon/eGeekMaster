

<h1>Pokédex de <?= $nomDresseur ?></h1>

<?php if (isset($message)) : ?>
    <p><?= $message ?></p>
<?php endif; ?>
<!-- Tableau pour afficher les Pokémon -->
<table>
    
    <div id="pokedex">
        <?php foreach ($listPokemon as $pokemon) : ?>
            <div class="pokemon-card" id="<?= $pokemon->getTypeOne() ?>">
                <h2><?= $pokemon->getNomEspece() ?></h2>
                <img src="<?= $pokemon->getUrlImg() ?? 'placeholder.jpg' ?>" alt="<?= $pokemon->getNomEspece() ?>">

                <div class="pokemon-details">
                    <p><strong>ID Pokémon:</strong> <?= $pokemon->getIdPokemon() ?></p>
                    <p><strong>Description:</strong> <?= $pokemon->getDescription() ?? 'N/A' ?></p>
                    <p><strong>Type One:</strong> <?= $pokemon->getTypeOne() ?></p>
                    <p><strong>Type Two:</strong> <?= $pokemon->getTypeTwo() ?? 'N/A' ?></p>
                </div>

                <div class="pokemon-actions">
                    
                    <a href="index.php?action=EditPokemon&IdPokemon=<?= $pokemon->getIdPokemon() ?>"><button type="submit" name="update">Modifier</button></a>
                    
                    <a href="index.php?action=DeletePokemon&IdPokemon=<?= $pokemon->getIdPokemon() ?>"><button type="submit" name="supr">Supprimer</button></a>
                    
                </div>
            </div>
            
        <?php endforeach; ?>
    </div>
    
</table>
