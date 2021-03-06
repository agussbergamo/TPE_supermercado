<?php
require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";

class HomeView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHome($logged)
    {
        $this->smarty->assign("rol", $logged["rol"]);
        if(!empty($logged["usuario"])){
            $this->smarty->assign("usuario", $logged["usuario"]);
        } else {
            $this->smarty->assign("usuario", "");
        }
        $this->smarty->display("templates/home.tpl");
    }
}
