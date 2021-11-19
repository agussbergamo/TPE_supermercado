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
        $puntaje = $_GET["puntaje"];
        //LO MISMO CON SORT Y ORDER. SE PASAN TODOS COMO PARÁMETRO AL MODEL.
            $id_producto = $params[":ID"];
            $comentarios = $this->model->getComments($id_producto);
            return $this->view->response($comentarios, 200);
    }

    function addComment($params = null)
    {
        $body = $this->getBody();
        //TODO: VALIDACIONES -> 400 BAD REQUEST
        $id = $this->model->addComment($body->id_producto, $body->id_usuario, $body->comentario, $body->puntaje, $body->fecha);
        if ($id != 0) {
            $this->view->response("El comentario se insertó con el id=$id", 200);
        } else {
            $this->view->response("El comentario no se pudo insertar", 500);
        }
    }

    private function getBody()
    {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

    function deleteComment($params = null)
    {
        $id_comment = $params[":ID"];
        $comment = $this->model->getComment($id_comment);
        if ($comment) {
            $this->model->deleteComment($id_comment);
            return $this->view->response("El comentario con el id=$id_comment fue eliminado", 200);
        } else {
            return $this->view->response("El comentario con el id=$id_comment no existe", 404);
        }
    }
}
