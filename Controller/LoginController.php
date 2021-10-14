<?php
require_once "Model/LoginModel.php";
require_once "View/LoginView.php";
require_once "View/ProdView.php";

class LoginController
{

    private $model;
    private $view;
    private $prodView;

    function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new LoginView();
        $this->prodView = new ProdView();
    }

    function login()
    {
        $this->view->showLogin();
    }

    function verifyLogin()
    {
        if (!empty($_POST["usuario"]) && !empty($_POST["contraseña"])) {
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];

            $user = $this->model->getUser($usuario);

            if ($user && password_verify($contraseña, $user->contraseña)) {

                session_start();
                $_SESSION["usuario"] = $usuario;

                header("Location: " .BASE_URL. "listProd");
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste!");
    }

    

}
