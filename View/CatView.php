<?php
require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";

class CatView {
    private $smarty; 

    function __construct(){
        $this->smarty = new Smarty();    
    }

    function showCategories ($categories) {
        $this->smarty->assign("title", "Lista de categorías");
        $this->smarty->assign("categories", $categories);
        $this->smarty->display("templates/listCat.tpl");
    }

    function showCategory($category, $nom_cat) {
        $this->smarty->assign("title", $nom_cat);         
        $this->smarty->assign("category", $category); 
        $this->smarty->display("templates/detailCat.tpl");
    }

}