<?php

class LoginModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
    }

    function getUser($usuario)
    {
        $query = $this->db->prepare("SELECT * FROM usuario WHERE usuario = ?");
        $query->execute([$usuario]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
