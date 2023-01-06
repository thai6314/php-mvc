<?php

namespace models;

use db\DB;

class CategoryModel
{
    private $db;
    public function __construct(){
        $this->db = new DB();
    }
    public function getAll(){
        $sql = "SELECT * FROM category";
        $conn = $this->db->openConnection();
        return $conn->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function add(array $category){
        $sql ="INSERT INTO category (name, description) VALUES (?,?)";
        $conn = $this->db->openConnection();
        $conn->prepare($sql)->execute($category);
    }
    public function update($category){
        $sql = "UPDATE category SET name=?, description=? WHERE category_id=?";
        $conn = $this->db->openConnection();
        $conn->prepare($sql)->execute($category);
    }

    public function delete($category_id){
        $sql = "DELETE FROM category WHERE category_id=?";
        $conn = $this->db->openConnection();
        $prepareStatement = $conn->prepare($sql);
        $prepareStatement->bindParam(1,$category_id);
        $prepareStatement->execute();
    }
    public function getCategoryByName($name){
        $sql = "SELECT * FROM category WHERE name=?";
        $conn = $this->db->openConnection();
        $prepareStatement = $conn->prepare($sql);
        $prepareStatement-> bindParam(1,$name);
        $prepareStatement->execute();
        return $prepareStatement->fetch(\PDO::FETCH_ASSOC);
    }

}