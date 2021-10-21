<?php
require_once "Model/ProdModel.php";
require_once "Model/CatModel.php";
require_once "View/ProdView.php";
require_once "Helpers/AuthHelper.php";


class ProdController
{

    private $model;
    private $view;
    private $catModel;
    private $authHelper;

    function __construct()
    {
        $this->model = new ProdModel();
        $this->view = new ProdView();
        $this->catModel = new CatModel();
        $this->authHelper = new AuthHelper();
    }

    function listProd()
    {
        $logged = $this->authHelper->checkLoggedIn();
        $products = $this->model->getProducts();
        $categories = $this->catModel->getCategories();
        $this->view->showProducts($products, $categories, $logged);
    }

    function viewProd($id)
    {
        $product = $this->model->getProduct($id);
        $this->view->showProduct($product);
    }

    function addProd()
    {
        $logged = $this->authHelper->checkLoggedIn();
        if ($logged == true) {
            if (
                !empty($_POST["nom_prod"]) && !empty($_POST["marca"]) && !empty($_POST["peso"]) && !empty($_POST["unidad_medida"])
                && !empty($_POST["precio"]) && !empty($_POST["id_cat"])
            ) {
                $this->model->addProduct($_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"]);
            }
            header("Location: " . BASE_URL . "listProd");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function deleteProd($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        if ($logged == true) {
            $this->model->deleteProduct($id);
            header("Location: " . BASE_URL . "listProd");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function editProd($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        if ($logged == true) {
            $product = $this->model->getProduct($id);
            $categories = $this->catModel->getCategories();
            $this->view->showProductEdit($product, $categories);
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function submitEditProd($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        if ($logged == true) {
            if (
                !empty($_POST["nom_prod"]) && !empty($_POST["marca"]) && !empty($_POST["peso"]) && !empty($_POST["unidad_medida"])
                && !empty($_POST["precio"]) && !empty($_POST["id_cat"])
            ) {
                $this->model->submitEditProd($id, $_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"]);
            }
            header("Location: " . BASE_URL . "listProd");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }
}
