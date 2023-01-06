<?php

namespace controllers;

use models\CategoryModel;
use models\ProductModel;
use views\ProductView;

class ProductController
{
    private $productModel;
    private $baseController;
    private $categoryModel;
    public function __construct(){
        $this->productModel = new ProductModel();
        $this->baseController = new BaseController();
        $this->categoryModel = new CategoryModel();
    }
    public function index(){
       $products = $this->productModel->getAll();
        $this->baseController->render('index', $products, []);
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
            header('Location: index.php?controller=product');
        }
        $product = $this->productModel->getProductById($product_id);
        $this->baseController->render('update', $product, []);
    }

    public function delete($product_id){
        $this->productModel->delete($product_id);
        header('Location: index.php?controller=product');
    }
    public function add(){
        var_dump('Product add');
        if(!empty($_POST)){
            $category = $this->categoryModel->getCategoryByName($_POST['category']);
            $productNew = array(
                $_POST['name'],
                $_POST['quantity'],
                $_POST['image'],
                $category['category_id'],
                $_POST['price'],
                $_POST['description'],

            );
            $this->productModel->add($productNew);
            header('Location: index.php?controller=product');
        }
        $categories = $this->categoryModel ->getAll();
        $this->baseController->render('add', [], $categories);
    }
    public function getDetail($product_id){
        $product = $this->productModel->getProductById($product_id);
        $this->baseController->render('detail', $product,[]);
    }
}