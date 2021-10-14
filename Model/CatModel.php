<?php

class CatModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
    }

    function getCategories()
    {
        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function getCategory($nom_cat)
    {
        $query = $this->db->prepare("SELECT * 
                                        FROM categoria LEFT JOIN producto
                                        ON producto.id_cat = categoria.id_cat
                                        WHERE nom_cat = ?");
        $query->execute(array($nom_cat));
        $prodsByCat = $query->fetchAll(PDO::FETCH_OBJ);
        return $prodsByCat;
    }

    function addCat()
    {
        $query = $this->db->prepare("INSERT INTO categoria (id_cat, nom_cat, refrig) VALUES (NULL, ?, ?)");
        $query->execute(array($_POST["nom_cat"], $_POST["refrig"]));
    }

    function deleteCategory($id)
    {
        $query = $this->db->prepare("DELETE
                                        FROM categoria 
                                        WHERE id_cat = ?");
        $query->execute(array($id));
    }

    function getCategoryFields($id_cat)
    {
        $query = $this->db->prepare("SELECT * FROM categoria WHERE id_cat = ?");
        $query->execute(array($id_cat));
        $categoryFields = $query->fetch(PDO::FETCH_OBJ);
        return $categoryFields;
    }

    function submitEditCat($id, $nom_cat, $refrig)
    {
        $query = $this->db->prepare("UPDATE categoria SET nom_cat = ?, refrig = ? WHERE id_cat =$id");
        $query->execute(array($nom_cat, $refrig));
    }
}
