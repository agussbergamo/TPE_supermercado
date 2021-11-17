<?php
require_once "Controller/ProdController.php";
require_once "Controller/CatController.php";
require_once "Controller/UserController.php";
require_once "Controller/HomeController.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$prodController = new ProdController();
$catController = new CatController();
$userController = new UserController();
$homeController = new HomeController();


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
        $userController->login();
        break;
    case 'verify':
        $userController->verifyLogin();
        break;
    case 'logout':
        $userController->logout($params[1]);
        break;
    case 'regist':
        $userController->regist();
        break;
    case 'submitRegist':
        $userController->submitRegist();
        break;
    case 'settings':
        $userController->settings();
        break;
    case 'deleteUser':
        $userController->deleteUser($params[1]);
        break;
    case 'upgradeUser':
        $userController->upgradeUser($params[1]);
        break;
    case 'downgradeUser':
        $userController->downgradeUser($params[1]);
        break;
    default:
        echo ('404 page not found');
        break;
}
