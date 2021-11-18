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
        $this->smarty->assign("title", "¡Bienvenido!");
        $this->smarty->assign("rol", $logged["rol"]);
        $this->smarty->display("templates/home.tpl");
    }
}
