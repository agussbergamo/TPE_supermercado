<?php
require_once "Controller/Controller.php";

define ('BASE_URL', '//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

 if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controller = new Controller();


switch($params[0]) {
    case 'home':
        $controller->showHome();
        break;
    case 'listProd':
        $controller->listProd();
        break;
    case 'viewProd':
        $controller->viewProd($params[1]);
        break;
    case 'listCat':
        $controller->listCat();
        break;
    case 'viewCat':
        $controller->viewCat($params[1]);
        break;
    case 'login':
        $controller->login($params[1]);
        break;
    default:
    echo('404 page not found');
    break;
}