<?php 
/*
 * Base controller
 * Loads the model and views
 *
 */

class Controller {
    public function model($model){
        // require model file

        require_once '../app/models/' . $model . '.php';

        // Instaniate model
        return new $model;
    }

    //load view

    public function view($view, $data = []){
        echo 'here 1';
        // check for view file
        if(file_exists('../app/views/' . $view . '.php')){
            echo  'here';
            require_once '../app/views/' . $view . '.php';
        } else {
            // view does not exist
            echo  'here';
            die('view does not exist');
        }
    }

}