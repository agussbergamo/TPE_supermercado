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

    /*
    function addComment($params = null){
        $body = $this->getBody();
        //TODO: VALIDACIONES -> 400 BAD REQUEST
        $id = $this->model->insertTask($body->titulo, $body->descripcion, $body->prioridad, false);
        if($id != 0){
            $this->view->response("La tarea se insertó con el id=$id", 200);
        } else {
            $this->view->response("La tarea no se pudo insertar", 500);
        }
    }

    // Función para devolver el body del request
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
*/
}