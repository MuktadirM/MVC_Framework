<?php

//base controller it load models and views
class BaseController{

    public function model($model){
        //require a model from models
        require_once '../app/models/'.$model.'.php';

        //create a object of that provided model
        return new $model;
    }

     // Load view
     public function view($view, $data = []){
        // Check for view file
        if(file_exists('../app/views/' . $view . '.php')){
          require_once '../app/views/' . $view . '.php';
        } else {
          // View does not exist
          die('View does not exist');
        }
      }

}