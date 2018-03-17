<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/10/2018
 * Time: 11:36 PM
 */
class Controller{
    function __construct(){
//        echo ' <br>Main Controller<br>';
        $this -> view = new View();
    }

    public function loadModel($name){
        $path = 'models/'.$name.'_model.php';

        if(file_exists($path)){
            require 'models/'.$name.'_model.php';

            $modelName  = $name.'_Model';
            $this->model = new $modelName();
        }
    }


}