<?php
// index.php
include_once 'controllers/DefaultController.php';
include_once 'controllers/GreetingController.php';
include_once 'models/Greeting.php';

$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$section = isset($_GET['s']) ? $_GET['s'] : '';

switch($section){
    case 'greeting':
        $controller = new GreetingController;
        break;
    default:
        $controller = new DefaultController;
}

$controller->run($action);


