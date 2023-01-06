<?php
require ('controllers/ProductController.php');
require ('controllers/BaseController.php');
require ('controllers/CategoryController.php');
require ('models/ProductModel.php');
require ('models/CategoryModel.php');
require ('db/DB.php');

$controller = $_REQUEST['controller'] ?? 'index';
$productController = new \controllers\ProductController();
if(isset($_REQUEST['action'])){
    var_dump('isAction');
    $action = $_REQUEST['action'];
    if($controller == "category"){
        var_dump('isCategory');
        $categoryController = new \controllers\CategoryController();
        var_dump('Category Contruct done');
        $categoryController->add();
    } else {
        if(isset($_REQUEST['id'])){
            $productController->$action($_REQUEST['id']);
        }
        else{
            $productController->$action();
        }
    }
}
else{
    var_dump('isNotAction');
    $productController->index();
}




