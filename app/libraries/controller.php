<?php
/**
 * Base Controller
 * Loads the models and views
 */
class Controller {
    // Load models
    public function model($model) {
        // Require model file 
        require_once '../app/models/'.$model.'.php';

        // Instatiate model
        return new $model();
    }

    // Load View
    public function view($view, $data = []) {
        // check of the view file 
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        } else {
            // view does not exist 
            die('View file does not exist');
        }
    }
}