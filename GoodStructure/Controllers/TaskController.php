<?php
require_once 'views/View.php';
require_once 'models/TaskManager.php';
require_once 'Controllers/MainController.php';

/**
 * Class TaskController
 * @package Controllers
 * @author Théo Cornu
 */
class TaskController {

    private $TaskManager;
    private $mainController;

    /**
     * TaskController constructor.
     */
    public function __construct() {
        $this->TaskManager = new TaskManager();
        $this->mainController = new MainController();

    }
}