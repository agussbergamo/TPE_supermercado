<?php
require_once "Controller/ProdController.php";
require_once "Controller/CatController.php";
require_once "Controller/LoginController.php";
require_once "Controller/HomeController.php";
require_once "Controller/CommController.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$prodController = new ProdController();
$catController = new CatController();
$loginController = new LoginController();
$homeController = new HomeController();
$commController = new CommController();


switch ($params[0]) {
    case 'home':
        $homeController->showHome();
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
    case 'submitEditProd':
        $prodController->submitEditProd($params[1]);
        break;
    case 'listCat':
        $catController->listCat();
        break;
    case 'viewCat':
        $catController->viewCat($params[1]);
        break;
    case 'addCat':
        $catController->addCat();
        break;
    case 'deleteCat':
        $catController->deleteCat($params[1]);
        break;
    case 'editCat':
        $catController->editCat($params[1]);
        break;
    case 'submitEditCat':
        $catController->submitEditCat($params[1]);
        break;    
    case 'login':
        $loginController->login();
        break;
    case 'verify':
        $loginController->verifyLogin();
        break;
    case 'logout':
        $loginController->logout($params[1]);
        break;
    default:
        echo ('404 page not found');
        break;
}
