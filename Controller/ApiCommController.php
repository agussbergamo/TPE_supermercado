<?php
require_once "Model/CommModel.php";
require_once "View/ApiView.php";

class ApiCommController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new CommModel();
        $this->view = new APIView();
    }

    function getComments($params = null)
    {
        $id_producto = $params[":ID"];
        $comentarios = $this->model->getComments($id_producto);
        return $this->view->response($comentarios, 200);
    }

}