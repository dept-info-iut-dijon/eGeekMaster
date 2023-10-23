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




