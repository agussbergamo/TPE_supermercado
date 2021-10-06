<?php

class CatModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_supermercado;charset=utf8', 'root','');
    }

    function getCategories() {
        $query = $this-> db -> prepare("SELECT * FROM categoria");
        $query -> execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories; 
    }

    function getCategory($nom_cat) {
        $query = $this-> db -> prepare("SELECT * 
                                        FROM categoria LEFT JOIN producto
                                        ON producto.id_cat = categoria.id_cat
                                        WHERE nom_cat = ?"); 
        $query -> execute(array($nom_cat));
        $category = $query->fetchAll(PDO::FETCH_OBJ);
        return $category; 
    }

}