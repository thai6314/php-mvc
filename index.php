<?php
require ('controllers/ProductController.php');
require ('models/ProductModel.php');
require ('views/ProductView.php');
require ('db/DB.php');

$controller = $_REQUEST['controller'] ?? 'index';
$productController = new \controllers\ProductController();
if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
    echo $action;
    if(isset($_REQUEST['product_id'])){
        $productController->$action($_REQUEST['product_id']);
    }
    else{
        $productController->$action();
    }
}
else{
    $productController->index();
}



