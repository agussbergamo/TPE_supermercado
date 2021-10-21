<?php
require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";

class ProdView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showProducts($products, $categories, $logged)
    {
        $this->smarty->assign("title", "Lista de productos");
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("logged", $logged);
        $this->smarty->display("templates/listProd.tpl");
    }

    function showProduct($product)
    {
        $this->smarty->assign("product", $product);
        $this->smarty->display("templates/detailProd.tpl");
    }

    function showProductEdit($product, $categories)
    {
        $this->smarty->assign("product", $product);
        $this->smarty->assign("categories", $categories);
        $this->smarty->display("templates/detailProdEdit.tpl");
    }
}
