<?php
require_once "Model/UserModel.php";
require_once "View/UserView.php";
require_once "Helpers/AuthHelper.php";

class UserController
{

    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new UserModel();
        $this->view = new UserView();
        $this->authHelper = new AuthHelper();
    }

    function login()
    {
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin" || $logged["rol"] == "user") {
            $this->view->showForm("Estás logueado!", $logged, "Login", "verify");
        } else {
            $this->view->showForm("Logueate por favor", $logged, "Login", "verify");
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
                $_SESSION["rol"] = $user->rol; 
                $_SESSION["id_usuario"] = $user->id_usuario;

                header("Location: " . BASE_URL . "listProd");
            } else {
                $this->view->showForm("Acceso denegado", false, "Login", "verify");
            }
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "login");
    }


    function regist()
    {
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin" || $logged["rol"] == "user") {
            $this->view->showForm("Ya estás registrado!", $logged, "Registro", "submitRegist");
        } else {
            $this->view->showForm("", $logged, "Registro", "submitRegist");
        }
    }

    function submitRegist()
    {
        if (!empty($_POST["usuario"]) && !empty($_POST["contraseña"])) {
            $usuario = $_POST["usuario"];
            $contraseña = password_hash($_POST["contraseña"], PASSWORD_BCRYPT);
            $this->model->submitRegist($usuario, $contraseña);

            session_start();
            $_SESSION["usuario"] = $usuario;
            $_SESSION["rol"] = "user";

            header("Location: " . BASE_URL . "listProd");
        } else {
            header("Location: " . BASE_URL . "regist");
        }
    }

    function settings(){
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin") {
            $usuarios = $this->model->getUsers();
            $this->view->showUsers($usuarios, $logged);
        }
    }

    function deleteUser($id_usuario){
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin") {
            $this->model->deleteUser($id_usuario);
            header("Location: " . BASE_URL . "settings");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function upgradeUser($id_usuario){
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin") {
            $this->model->updateUser($id_usuario, "admin");
            header("Location: " . BASE_URL . "settings");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function downgradeUser($id_usuario){
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin") {
            $this->model->updateUser($id_usuario, "user");
            header("Location: " . BASE_URL . "settings");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }



}
