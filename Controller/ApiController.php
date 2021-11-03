<?php
require_once "Model/CommModel.php";
require_once "View/ApiView.php";

class ApiController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new CommModel();
        $this->view = new APIView();
    }

    function getComments()
    {
        $comentarios = $this->model->getComments(6);
        return $this->view->response($comentarios, 200);
    }

}