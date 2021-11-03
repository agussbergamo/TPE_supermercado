<?php
require_once "libs/Router.php";
require_once "Controller/ApiController.php";

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comments/:ID', 'GET', 'ApiController', 'getComments');
/*$router->addRoute('tareas/:ID', 'GET', 'ApiTaskController', 'obtenerTarea');
$router->addRoute('tareas/:ID', 'DELETE', 'ApiTaskController', 'eliminarTarea');
$router->addRoute('tareas', 'POST', 'ApiTaskController', 'insertarTarea');
$router->addRoute('tareas/:ID', 'PUT', 'ApiTaskController', 'actualizarTarea');
*/

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
