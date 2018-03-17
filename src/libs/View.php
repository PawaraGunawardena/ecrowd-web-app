<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/10/2018
 * Time: 11:41 PM
 */

class View{
    function __construct(){
//        echo ' This is the View of lib file';
    }
    public function render($name, $noInclude = false){
//        echo ' <br>Inside the render function of lib/View';

        if($noInclude == true){
            require 'views/' . $name . '.php';
        }else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }

}