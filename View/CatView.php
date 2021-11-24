<?php
require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";

class CatView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showCategories($categories, $logged)
    {
        $this->smarty->assign("title", "Lista de categorías");
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("rol", $logged["rol"]);
        if(!empty($logged["usuario"])){
            $this->smarty->assign("usuario", $logged["usuario"]);
        } else {
            $this->smarty->assign("usuario", "");
        }
        $this->smarty->display("templates/listCat.tpl");
    }

    function showCategory($prodsByCat, $nom_cat, $logged)
    {
        $this->smarty->assign("title", $nom_cat);
        $this->smarty->assign("products", $prodsByCat);
        $this->smarty->assign("rol", $logged["rol"]);
        if(!empty($logged["usuario"])){
            $this->smarty->assign("usuario", $logged["usuario"]);
        } else {
            $this->smarty->assign("usuario", "");
        }
        $this->smarty->display("templates/detailCat.tpl");
    }

    function showCategoryEdit($categoryFields, $logged)
    {
        $this->smarty->assign("category", $categoryFields);
        $this->smarty->assign("rol", $logged["rol"]);
        if(!empty($logged["usuario"])){
            $this->smarty->assign("usuario", $logged["usuario"]);
        } else {
            $this->smarty->assign("usuario", "");
        }
        $this->smarty->display("templates/detailCatEdit.tpl");
    }
}
