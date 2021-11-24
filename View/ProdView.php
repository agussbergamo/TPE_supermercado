<?php
require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";

class ProdView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showProducts($products, $categories, $logged, $mensaje = null)
    {
        $this->smarty->assign("title", "Lista de productos");
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("rol", $logged["rol"]);
        if(!empty($logged["usuario"])){
            $this->smarty->assign("usuario", $logged["usuario"]);
        } else {
            $this->smarty->assign("usuario", "");
        }
        $this->smarty->assign("mensajeError", $mensaje);
        $this->smarty->display("templates/listProd.tpl");
    }

    function showProduct($product, $logged)
    {

        $this->smarty->assign("product", $product);
        $this->smarty->assign("rol", $logged["rol"]);
        $this->smarty->assign("id_usuario", $logged["id_usuario"]);
        if(!empty($logged["usuario"])){
            $this->smarty->assign("usuario", $logged["usuario"]);
        } else {
            $this->smarty->assign("usuario", "");
        }
        $this->smarty->display("templates/detailProd.tpl");
    }

    function showProductEdit($product, $categories, $logged, $mensaje = null)
    {
        $this->smarty->assign("product", $product);
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("rol", $logged["rol"]);
        if(!empty($logged["usuario"])){
            $this->smarty->assign("usuario", $logged["usuario"]);
        } else {
            $this->smarty->assign("usuario", "");
        }
        $this->smarty->assign("mensajeError", $mensaje);
        $this->smarty->display("templates/detailProdEdit.tpl");
    }
}
