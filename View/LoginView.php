<?php
require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";

class LoginView {

    private $smarty; 

    function __construct(){
        $this->smarty = new Smarty();    
    }

    function showLogin ($mensaje = "", $logged) {
        $this->smarty->assign("title", "Login");
        $this->smarty->assign("mensaje", $mensaje);
        $this->smarty->assign("logged", $logged);
        $this->smarty->display("templates/login.tpl");
    }

    function showHome() {
        header("Location: ".BASE_URL."home");
    }
}