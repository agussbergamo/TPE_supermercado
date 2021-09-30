<?php
require_once "Model/ProdModel.php";
require_once "View/ProdView.php";

class Controller {

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

    function listCat() {
        $categories = $this-> model -> getCategories();
        $this-> view-> showCategories($categories);
    }

    function viewCat($nom_cat) {
        $category = $this-> model-> getCategory($nom_cat);
        $this-> view-> showCategory($category, $nom_cat);
    }

    function login() {
        
    }


}