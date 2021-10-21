<?php
require_once "Model/LoginModel.php";
require_once "View/LoginView.php";
require_once "Helpers/AuthHelper.php";

class LoginController
{

    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
    }

    function login()
    {
        $logged = $this->authHelper->checkLoggedIn();
        if($logged == true){
            $this->view->showLogin("Estás logueado!", $logged);            
        } else {
            $this->view->showLogin("Logueate por favor", $logged);        
        }
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

                header("Location: " . BASE_URL . "listProd");
            } else {
                $this->view->showLogin("Acceso denegado", false);
            }
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "login");
    }
}
