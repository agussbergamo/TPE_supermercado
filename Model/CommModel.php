<?php

class CommModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
    }

    function getComments($id_producto, $atributo, $criterio)
    {
        $query = $this->db->prepare("SELECT comentarios.*, usuario.usuario FROM comentarios LEFT JOIN usuario
                                    ON comentarios.id_usuario = usuario.id_usuario
                                    WHERE id_producto = ?
                                    ORDER BY $atributo $criterio");
        $query->execute(array($id_producto));
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function getCommentsByPuntaje($id_producto, $puntaje, $atributo, $criterio)
    {
        $query = $this->db->prepare("SELECT comentarios.*, usuario.usuario FROM comentarios LEFT JOIN usuario
                                    ON comentarios.id_usuario = usuario.id_usuario
                                    WHERE id_producto = ? AND puntaje = ?
                                    ORDER BY $atributo $criterio");
        $query->execute(array($id_producto, $puntaje));
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }
    
    function getComment($id)
    {
        $query = $this->db->prepare("SELECT * FROM comentarios WHERE id = ?");
        $query->execute(array($id));
        $comentario = $query->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }

    function addComment($id_producto, $id_usuario, $comentario, $puntaje, $fecha)
    {
        $query = $this->db->prepare("INSERT INTO comentarios (id, id_producto, id_usuario, comentario, puntaje, fecha) VALUES (NULL, ?, ?, ?, ?, ?)");
        $query->execute(array($id_producto, $id_usuario, $comentario, $puntaje, $fecha));
        return $this->db->lastInsertId();
    }

    function deleteComment($id)
    {
        $query = $this->db->prepare("DELETE FROM comentarios WHERE id = ?");
        $query->execute(array($id));
    }
}
