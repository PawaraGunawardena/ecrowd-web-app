<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/10/2018
 * Time: 9:37 PM
 */
class Index extends Controller{
    function __construct(){
        parent::__construct();
//        echo 'we are in index controller';
//        $this->view->render('index/index');
    }

    function index(){

//        echo 'index, controller index';
        $this->view->render('index/index');
    }
}
