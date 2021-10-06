<?php
require_once "Model/ProdModel.php";
require_once "View/ProdView.php";

class ProdController {

    private $model;
    private $view;

    function __construct() {
        $this-> model = new ProdModel();
        $this-> view = new ProdView();
    }
    
    function showHome() {
        $this-> view-> showHome();
    }

    function listProd() {
        $products = $this-> model -> getProducts();
        $this-> view-> showProducts($products);
    }
    
    function viewProd($id) {
        $product = $this-> model-> getProduct($id);
        $this-> view-> showProduct($product);
    }

    function addProd() { 
        if (!empty($_POST["nom_prod"]) && !empty($_POST["marca"]) && !empty($_POST["peso"]) && !empty($_POST["unidad_medida"])
            && !empty($_POST["precio"]) && !empty($_POST["id_cat"]))
        $this-> model-> addProduct($_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"]);
        $this->listProd();
    }
    
    function deleteProd($id) {
        $this-> model-> deleteProduct($id);
        $this-> listProd();
    }

    function editProd($id) {
        $product = $this-> model-> getProduct($id);
        $this-> view-> showProductEdit($product);
    }

    function submitEdit($id) {
        if (!empty($_POST["nom_prod"]) && !empty($_POST["marca"]) && !empty($_POST["peso"]) && !empty($_POST["unidad_medida"])
            && !empty($_POST["precio"]) && !empty($_POST["id_cat"]))
        $this-> model-> submitEdit($id, $_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"]);
        $this->listProd();
    }
 


}
