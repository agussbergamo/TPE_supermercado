<?php

class CommModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
    }

    function getComments($id_producto)
    {
        $query = $this->db->prepare("SELECT comentarios.*, usuario.usuario FROM comentarios LEFT JOIN usuario
                                    ON comentarios.id_usuario = usuario.id_usuario
                                    WHERE id_producto = ?");
        $query->execute(array($id_producto));
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

}