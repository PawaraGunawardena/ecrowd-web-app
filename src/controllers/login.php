<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/11/2018
 * Time: 10:45 PM
 */
class Login extends Controller{
    function __construct(){
        parent::__construct();
//        echo 'we are in index controller';
//        $this->view->render('login/index');
    }

    function index(){
//        echo Hash::create('md5','sword',HASH_PASSWORD_KEY);
//        echo '<br> Crazy';
//        require 'models/login_model.php';
//        $model = new Login_Model();
//        echo 'index, controller login';
        $this->view->render('login/index');
    }

    function run(){
        $this->model->run();
    }
}