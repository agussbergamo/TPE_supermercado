<?php

class ProdModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_supermercado;charset=utf8', 'root', '');
    }

    function getProducts()
    {
        $query = $this->db->prepare("SELECT producto.nom_prod, producto.id_prod, categoria.nom_cat
                                        FROM producto LEFT JOIN categoria
                                        ON producto.id_cat = categoria.id_cat");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id)
    {
        $query = $this->db->prepare("SELECT * 
                                        FROM producto LEFT JOIN categoria
                                        ON producto.id_cat = categoria.id_cat
                                        WHERE id_prod = ?");
        $query->execute(array($id));
        $product = $query->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    function addProduct($nom_prod, $marca, $peso, $unidad_medida, $precio, $id_cat)
    {
        $query = $this->db->prepare("INSERT INTO producto (id_prod, nom_prod, marca, peso, unidad_medida, precio, id_cat) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
        $query->execute(array($nom_prod, $marca, $peso, $unidad_medida, $precio, $id_cat));
    }

    function deleteProduct($id)
    {
        $query = $this->db->prepare("DELETE
                                        FROM producto 
                                        WHERE id_prod = ?");
        $query->execute(array($id));
    }

    function submitEditProd($id, $nom_prod, $marca, $peso, $unidad_medida, $precio, $id_cat, $nombre_archivo = null, $ruta_temporal)
    {
        $filePath = "img/" . uniqid("", true) . ".". strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
        move_uploaded_file($ruta_temporal, $filePath);       
        $query = $this->db->prepare("UPDATE producto SET nom_prod = ?, marca = ?, peso = ?, unidad_medida = ?, precio = ?, id_cat = ?, imagen = ? WHERE id_prod = ?");
        $query->execute(array($nom_prod, $marca, $peso, $unidad_medida, $precio, $id_cat, $filePath, $id));
    }

    function filterProd($atributo, $filtro){
        $query = $this->db->prepare("SELECT producto.*, categoria.nom_cat 
                                    FROM producto LEFT JOIN categoria
                                    ON producto.id_cat = categoria.id_cat
                                    WHERE $atributo LIKE ?");
        $query->execute(array("%$filtro%"));
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }


}
