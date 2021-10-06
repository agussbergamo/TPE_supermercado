<?php
require_once "Controller/ProdController.php";
require_once "Controller/CatController.php";

define ('BASE_URL', '//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

 if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$prodController = new ProdController();
$catController = new CatController();


switch($params[0]) {
    //MOVER AL CONTROLADOR QUE CORRESPONDA AL FINAL
    case 'home':
        $prodController->showHome();
        break;
    case 'listProd':
        $prodController->listProd();
        break;
    case 'viewProd':
        $prodController->viewProd($params[1]);
        break;
    case 'addProd':
        $prodController->addProd();
        break; 
    case 'deleteProd':
        $prodController->deleteProd($params[1]);
        break;
    case 'editProd':
        $prodController->editProd($params[1]);
        break;
    case 'submitEdit':
        $prodController->submitEdit($params[1]);
        break;
    case 'listCat':
        $catController->listCat();
        break;
    case 'viewCat':
        $catController->viewCat($params[1]);
        break;
    /*case 'login':
        $prodController->login($params[1]);
        break;*/




    default:
    echo('404 page not found');
    break;
}