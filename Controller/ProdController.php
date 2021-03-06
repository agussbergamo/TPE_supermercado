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

    function listProd($logged = null, $mensaje = null)
    {
        if(!isset($logged)){
            $logged = $this->authHelper->checkLoggedIn();
        }
        $products = $this->model->getProducts();
        $categories = $this->catModel->getCategories();
        $this->view->showProducts($products, $categories, $logged, $mensaje);
    }

    function viewProd($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        $product = $this->model->getProduct($id);
        //if($logged["id_usuario"])
        $this->view->showProduct($product, $logged);
    }

    function addProd()
    {
        $logged = $this->authHelper->checkLoggedIn();
        if ($logged["rol"] == "admin") {
            if (
                !empty($_POST["nom_prod"]) && !empty($_POST["marca"]) && !empty($_POST["peso"])
                && !empty($_POST["unidad_medida"]) && !empty($_POST["precio"]) && !empty($_POST["id_cat"])
            ) {
                if (!empty($_FILES["input_name"]["name"])) {
                    if (($_FILES["input_name"]["type"] == "image/jpg" ||
                        $_FILES["input_name"]["type"] == "image/jpeg" ||
                        $_FILES["input_name"]["type"] == "image/png")) {
                            $nombre_archivo = ($_FILES["input_name"]["name"]);
                            $ruta_temporal = ($_FILES["input_name"]["tmp_name"]);
                            $this->model->addProduct($_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"], $nombre_archivo, $ruta_temporal);
                            header("Location: " . BASE_URL . "listProd");
                    } else {
                        $this->listProd($logged, "Formato de imagen no v??lido.");
                        header("Location: " . BASE_URL . "listProd");
                    }
                } else {
                    $this->model->addProduct($_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"]);
                    header("Location: " . BASE_URL . "listProd");
                }
            } else {
                header("Location: " . BASE_URL . "listProd"); 
            }
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }


    function deleteProd($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        if ($logged["rol"] == "admin") {
            $this->model->deleteProduct($id);
            header("Location: " . BASE_URL . "listProd");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function editProd($id, $logged = null, $mensaje = null)
    {
        if(!isset($logged)){
            $logged = $this->authHelper->checkLoggedIn();
        }
        if ($logged["rol"] == "admin") {
            $product = $this->model->getProduct($id);
            $categories = $this->catModel->getCategories();
            $this->view->showProductEdit($product, $categories, $logged, $mensaje);
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function submitEditProd($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        if ($logged["rol"] == "admin") {
            if (
                !empty($_POST["nom_prod"]) && !empty($_POST["marca"]) && !empty($_POST["peso"])
                && !empty($_POST["unidad_medida"]) && !empty($_POST["precio"]) && !empty($_POST["id_cat"])
            ) {
                if (!empty($_FILES["input_name"]["name"])) {
                    if (($_FILES["input_name"]["type"] == "image/jpg" ||
                        $_FILES["input_name"]["type"] == "image/jpeg" ||
                        $_FILES["input_name"]["type"] == "image/png")) {
                            $nombre_archivo = ($_FILES["input_name"]["name"]);
                            $ruta_temporal = ($_FILES["input_name"]["tmp_name"]);
                            $this->model->submitEditProd($id, $_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"], $nombre_archivo, $ruta_temporal);
                            header("Location: " . BASE_URL . "viewProd/$id");
                    } else {
                        $this->editProd($id, $logged, "Formato de imagen no v??lido.");
                        header("Location: " . BASE_URL . "viewProd/$id");
                    }
                } else {
                    $this->model->submitEditProd($id, $_POST["nom_prod"], $_POST["marca"], $_POST["peso"], $_POST["unidad_medida"], $_POST["precio"], $_POST["id_cat"]);
                    header("Location: " . BASE_URL . "viewProd/$id");
                }
            } else {
                header("Location: " . BASE_URL . "viewProd/$id"); 
            }
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function filterProd()
    {
        $logged = $this->authHelper->checkLoggedIn();
        if ($logged["rol"] == "admin" || $logged["rol"] == "user") {
            if (!empty($_POST["atributo"]) && !empty($_POST["filtro"]) && ($_POST["atributo"] == "nom_prod"
                || $_POST["atributo"] == "marca" || $_POST["atributo"] == "peso" || $_POST["atributo"] == "precio")) {
                $prodFiltrados = $this->model->filterProd($_POST["atributo"], $_POST["filtro"]);
                if ($prodFiltrados) {
                    $categories = $this->catModel->getCategories();
                    $this->view->showProducts($prodFiltrados, $categories, $logged);
                } else {
                    header("Location: " . BASE_URL . "listProd");
                }
            }
        }
    }
}
