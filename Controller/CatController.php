<?php
require_once "Model/CatModel.php";
require_once "View/CatView.php";

class CatController {

    private $model;
    private $view;

    function __construct() {
        $this-> model = new CatModel();
        $this-> view = new CatView();
    }
    
    function listCat() {
        $categories = $this-> model -> getCategories();
        $this-> view-> showCategories($categories);
    }

    function viewCat($nom_cat) {
        $category = $this-> model-> getCategory($nom_cat);
        $this-> view-> showCategory($category, $nom_cat);
    }

}