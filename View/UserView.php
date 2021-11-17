<?php
require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";

class UserView {

    private $smarty; 

    function __construct(){
        $this->smarty = new Smarty();    
    }

    function showForm ($mensaje = "", $logged, $title, $action) {
        $this->smarty->assign("title", $title);
        $this->smarty->assign("mensaje", $mensaje);
        $this->smarty->assign("logged", $logged);
        $this->smarty->assign("action", $action);
        $this->smarty->display("templates/form_user.tpl");
    }

    function showUsers($usuarios, $logged){
        $this->smarty->assign("title", "Lista de usuarios");
        $this->smarty->assign("logged", $logged);
        $this->smarty->assign("usuarios", $usuarios);
        $this->smarty->display("templates/usersList.tpl");
    }


}