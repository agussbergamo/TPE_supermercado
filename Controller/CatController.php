<?php
require_once "Model/CatModel.php";
require_once "Model/ProdModel.php";
require_once "View/CatView.php";
require_once "Helpers/AuthHelper.php";


class CatController
{

    private $model;
    private $view;
    private $authHelper; 

    function __construct()
    {
        $this->model = new CatModel();
        $this->view = new CatView();
        $this->authHelper = new AuthHelper();
    }

    function listCat()
    {
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }

    function viewCat($nom_cat)
    {
        $prodsByCat = $this->model->getCategory($nom_cat);
        $this->view->showCategory($prodsByCat, $nom_cat);
    }

    function addCat()
    {
        $this->authHelper->checkLoggedIn();
        if (!empty($_POST["nom_cat"]) && !empty($_POST["refrig"]))
            $this->model->addCat($_POST["nom_cat"], $_POST["refrig"]);
        $this->listCat();
    }

    function deleteCat($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteCategory($id);
        $this->listCat();
    }

    function editCat($id_cat)
    {
        $this->authHelper->checkLoggedIn();
        $categoryFields = $this->model->getCategoryFields($id_cat);
        $this->view->showCategoryEdit($categoryFields);
    }

    function submitEditCat($id)
    {
        $this->authHelper->checkLoggedIn();
        if (isset($_POST["nom_cat"]) && isset($_POST["refrig"]))
            $this->model->submitEditCat($id, $_POST["nom_cat"], $_POST["refrig"]);
        //$this->listCat();
        header("Location: ".BASE_URL."listCat");
    }
}
