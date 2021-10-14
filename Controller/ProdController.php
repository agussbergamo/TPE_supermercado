<?php
require_once "Model/ProdModel.php";
require_once "Model/CatModel.php";
require_once "View/ProdView.php";
require_once "Helpers/AuthHelper.php";


class ProdController
{

    private $model;
    private $view;
    private $authHelper; 

    function __construct()
    {
        $this->model = new ProdModel();
        $this->catModel = new CatModel();
        $this->view = new ProdView();
        $this->authHelper = new AuthHelper();
    }

    function listProd()
    {
        $products = $this->model->getProducts();
        $categories = $this->catModel->getCategories();
        $this->view->showProducts($products, $categories);
    }

    function viewProd($id)
    {
        $product = $this->model->getProduct($id);
        $this->view->showProduct($product);
    }

    function addProd()
    {
        $this->authHelper->checkLoggedIn();
        if (
            !empty($_POST["nom_prod"]) && !empty($_POST["marca"]) && !empty($_POST["peso"]) && !empty($_POST["unidad_medida"])
            && !empty($_POST["precio"]) && !empty($_POST["id_cat"])
        )
            $this->model->addProduct($_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"]);
        $this->listProd();
    }

    function deleteProd($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteProduct($id);
        $this->listProd();
    }

    function editProd($id)
    {
        $this->authHelper->checkLoggedIn();
        $product = $this->model->getProduct($id);
        $categories = $this->catModel->getCategories();
        $this->view->showProductEdit($product, $categories);
    }

    function submitEditProd($id)
    {
        $this->authHelper->checkLoggedIn();
        if (
            !empty($_POST["nom_prod"]) && !empty($_POST["marca"]) && !empty($_POST["peso"]) && !empty($_POST["unidad_medida"])
            && !empty($_POST["precio"]) && !empty($_POST["id_cat"])
        )
            $this->model->submitEditProd($id, $_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"]);
        $this->listProd();
    }
}
