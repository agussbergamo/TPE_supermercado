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
        $this->smarty->assign("rol", $logged["rol"]);
        if(!empty($logged["usuario"])){
            $this->smarty->assign("usuario", $logged["usuario"]);
        } else {
            $this->smarty->assign("usuario", "");
        }
        $this->smarty->assign("action", $action);
        $this->smarty->display("templates/form_user.tpl");
    }

    function showUsers($usuarios, $logged){
        $this->smarty->assign("title", "Lista de usuarios");
        $this->smarty->assign("rol", $logged["rol"]);
        if(!empty($logged["usuario"])){
            $this->smarty->assign("usuario", $logged["usuario"]);
        } else {
            $this->smarty->assign("usuario", "");
        }
        $this->smarty->assign("usuario_registrado", $logged["id_usuario"]);
        $this->smarty->assign("usuarios", $usuarios);
        $this->smarty->display("templates/usersList.tpl");
    }


}