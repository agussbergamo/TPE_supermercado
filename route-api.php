<?php
require_once "libs/Router.php";
require_once "Controller/ApiCommController.php";

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('products/:ID/comments', 'GET', 'ApiCommController', 'getComments');
$router->addRoute('products/:ID/comments', 'POST', 'ApiCommController', 'addComment');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommController', 'deleteComment');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
