<?php
require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";

class CommView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showCommentsCSR(){
        $this->smarty->display("templates/vue/comments.tpl");
    }


}
