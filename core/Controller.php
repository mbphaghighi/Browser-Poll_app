<?php
class Controller{
    function __construct()
    {
    }

    function view($viewUrl,$data=[])
    {
        require('view/' . $viewUrl . '.php');
    }

    function model($modelUrl){
        require('model/model_'.$modelUrl.'.php');
        $classname='model_'.$modelUrl;
        $this->model=new $classname;
    }
}