<?php

namespace controllers;

use models\ProductModel;
use views\ProductView;

class ProductController
{
    private $productModel;
    private $productView;
    public function __construct(){
        $this->productModel = new ProductModel();
        $this->productView = new ProductView();
    }
    public function index(){
        echo "Product controller";
    }
    public function show(){
        $products = $this->productModel->getAll();
        $this->productView->show($products);
    }
    public function update($product_id){
        if(!empty($_POST)){
            $productUpdate = [
                $_POST['image'],
                $_POST['name'],
                $_POST['price'],
                $_POST['quantity'],
                $_POST['description'],
                $_POST['product_id'],
            ];
            $this->productModel->update($productUpdate);
            header('Location: index.php?controller=product&&action=show');
        }
        $product = $this->productModel->getProductById($product_id);
        $this->productView->update($product);
    }

    public function delete($product_id){
        $this->productView->delete($product_id);

        $this->productModel->delete($product_id);

        header('Location: index.php?controller=product&&action=show');
    }
    public function add(){
        if(!empty($_POST)){
            $productNew = array(
                $_POST['name'],
                $_POST['quantity'],
                $_POST['image'],
                $_POST['category'],
                $_POST['price'],
                $_POST['description'],

            );
            $this->productModel->add($productNew);
            header('Location: index.php?controller=product&&action=show');
        }
        $this->productView->add();

    }
}