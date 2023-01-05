<?php

namespace models;

use db\DB;

class ProductModel{
    private $db;

    public function __construct(){
        $this-> db = new DB();
    }

    public function getAll(){
        $sql = "SELECT * FROM product";
        $conn = $this->db->openConnection();
        return $conn->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update($product){
        $sql = "UPDATE product SET image= ?,name=?, price= ?, quantity= ?, description= ? WHERE product_id= ?";
        $conn = $this->db->openConnection();
        $conn->prepare($sql)->execute($product);
    }

    public function getProductById($product_id){
        $sql = "SELECT * FROM product WHERE product_id= ?";
        $conn = $this->db->openConnection();
        $prepareStatement = $conn->prepare($sql);
        $prepareStatement-> bindParam(1,$product_id);
        $prepareStatement->execute();
        return $prepareStatement->fetch(\PDO::FETCH_ASSOC);
    }

}