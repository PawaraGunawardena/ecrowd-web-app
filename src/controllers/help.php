<?php

class Help extends Controller{

    function __construct(){
        parent::__construct();
        echo ' <br>we are in inside help controller<br>';
//        $this->view->render('help/index');
    }

    function index(){
        echo 'index, controller help';
        $this->view->render('help/index');
    }

    public function other($number=false ) {
        $this->view->render('help/other');
        echo "<br>We are inside other<br> '$number' is given";
        require 'models/help_model.php';
        $model = new Help_Model();


        $model = new Help_Model();
        $this->view->blah = $model->blah();

//        $this->view->render('help/test');
    }

}