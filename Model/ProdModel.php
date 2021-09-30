<?php

class ProdModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_supermercado;charset=utf8', 'root','');
    }

    function getProducts() {
        $query = $this-> db -> prepare("SELECT * FROM producto");
        $query -> execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products; 
    }

    function getProduct($id) {
        $query = $this-> db -> prepare("SELECT * FROM producto WHERE id_prod = ?");
        $query -> execute(array($id));
        $product = $query->fetch(PDO::FETCH_OBJ);
        return $product; 
    }

    function getCategories() {
        $query = $this-> db -> prepare("SELECT * FROM categoria");
        $query -> execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories; 
    }

    function getCategory($nom_cat) {
        $query = $this-> db -> prepare("SELECT * FROM producto WHERE nom_cat = ?");
        $query -> execute(array($nom_cat));
        $category = $query->fetchAll(PDO::FETCH_OBJ);
        return $category; 
    }


}