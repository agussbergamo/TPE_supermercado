<?php
require_once "Model/CatModel.php";
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
        $logged = $this->authHelper->checkLoggedIn();
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories, $logged);
    }

    function viewCat($nom_cat)
    {
        $logged = $this->authHelper->checkLoggedIn();
        $prodsByCat = $this->model->getCategory($nom_cat);
        $this->view->showCategory($prodsByCat, $nom_cat, $logged);
    }

    function addCat()
    {
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin") {
            if (isset($_POST["nom_cat"]) && isset($_POST["refrig"])) {
                $this->model->addCat($_POST["nom_cat"], $_POST["refrig"]);
            }
            header("Location: " . BASE_URL . "listCat");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function deleteCat($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin") {
            $this->model->deleteCategory($id);
            header("Location: " . BASE_URL . "listCat");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function editCat($id_cat)
    {
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin") {
            $categoryFields = $this->model->getCategoryFields($id_cat);
            $this->view->showCategoryEdit($categoryFields, $logged);
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function submitEditCat($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        if($logged["rol"] == "admin") {
            if (isset($_POST["nom_cat"]) && isset($_POST["refrig"])) {
                $this->model->submitEditCat($id, $_POST["nom_cat"], $_POST["refrig"]);
            }
            header("Location: " . BASE_URL . "listCat");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }
}
