<?php
/*
Base Controller 
* Loads Models
* Load views

*/
 
class Controller {

    // load model
    public function model($model){
        // require the model file
        require_once '../app/models/'. $model . '.php';
        // instantiate the model
        return new $model();
    }






    // load View()
    public function view($view, $data = []){
        // check for the view file
        if(file_exists('../app/views/' . $view . '.php')){
            require '../app/views/' .$view . '.php';

        }else{
          header('location: ../app/views/404');
        }

    }
}



















?>