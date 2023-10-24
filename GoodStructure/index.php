<?php
require_once 'Controllers/MainController.php';
require_once 'Controllers/Router/Router.php';

if (isset($_GET['action'] )) {
    ob_clean();
    $router = new Router('action');
    $router->routing($_GET, $_POST);
} else {
    $mainController = new MainController();
    $mainController->index();
}


//ex de navigation grace à l'url
/* <a href="index.php?action=EditPokemon&IdPokemon=<?= $pokemon->getIdPokemon() ?>"><button type="submit" name="update">Modifier</button></a>
                    
<a href="index.php?action=DeletePokemon&IdPokemon=<?= $pokemon->getIdPokemon() ?>"><button type="submit" name="supr">Supprimer</button></a>
*/                    


