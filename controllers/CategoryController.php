<?php

namespace controllers;

use models\CategoryModel;

class CategoryController
{
    private $categoryModel;
    private $baseController;
    public function __construct(){
        var_dump('CategoryController_construct');
        $this->categoryModel = new CategoryModel();
        $this->baseController = new BaseController();
    }
    public function add(){
        if(!empty($_POST)){
            $category = array(
                $_POST['name'],
                $_POST['description']
            );
            $this->categoryModel->add($category);
            header('Location:index.php?controller=product&&action=add');
        }
        $this->baseController->render('add_category');
    }
}