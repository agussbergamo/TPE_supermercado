<?php

class UserModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
    }

    function getUser($usuario)
    {
        $query = $this->db->prepare("SELECT * FROM usuario WHERE usuario = ?");
        $query->execute(array($usuario));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getUsers(){
        $query = $this->db->prepare("SELECT * FROM usuario");
        $query->execute(array());
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function submitRegist($usuario, $contraseña, $rol="user")
    {
        $query = $this->db->prepare("INSERT INTO usuario (id_usuario, usuario, contraseña, rol) VALUES (NULL, ?, ?, ?)");
        $query->execute(array($usuario, $contraseña, $rol));
    }

    function deleteUser($id)
    {
        $query = $this->db->prepare("DELETE
                                        FROM usuario 
                                        WHERE id_usuario = ?");
        $query->execute(array($id));
    }

    
    function updateUser($id, $rol)
    {
        $query = $this->db->prepare("UPDATE usuario SET rol = ? WHERE id_usuario = ?");
        $query->execute(array($rol, $id));
    }



}
