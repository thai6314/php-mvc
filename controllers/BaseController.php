<?php

namespace controllers;

class BaseController
{
    protected $folder;
    public function render($file, $data = null, $data1 = null){
        var_dump('render');
        var_dump($file);
        $view_file = "views/" . $file. ".php";
        if(is_file($view_file)){
            var_dump($view_file);
            extract($data, $data1);
            require_once($view_file);
        }
    }
}