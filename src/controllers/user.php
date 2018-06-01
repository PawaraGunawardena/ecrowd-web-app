<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/12/2018
 * Time: 9:51 AM
 */

class User extends Controller{
    function __construct(){
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');

        $role = Session::get('role');
//        echo "??????????????????????????????????????? ".$role;

        if($logged == false || $role != 'admin'){
            Session::destroy();
            header('location: login'); //or better to use whole url by URL variable
            exit;
        }
//        Auth::handleLogin();
    }
    function index(){

        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');

    }

    function register(){

//        $this->view->userList = $this->model->userList();
        $this->view->render('user/register');

    }

    public function create(){
        $data = array();

        $data['username'] = $_POST['username'];
        $data['email' ]= $_POST['email'];
        $data['first_name'] = $_POST['first_name'];
        $data['last_name' ]= $_POST['last_name'];
        $data['password' ]= $_POST['password'];
        $data['role' ]= $_POST['role'];

        //@TODO Error checking

        $this->model->create($data);
        header('location:'.URL.'user');
//        header('location:'.URL.'login');
    }

    public function edit($username){
        //individual user
        $this->view->user = $this->model->userSingleList($username);
        $this->view->render('user/edit');
    }

    public function editSave($username){
        $data = array();


        $data['username'] = $username;
        $data['email' ]= $_POST['email'];
        $data['first_name'] = $_POST['first_name'];
        $data['last_name' ]= $_POST['last_name'];
        $data['password' ]= $_POST['password'];
        $data['role' ]= $_POST['role'];

        //@TODO Error checking

        $this->model->editSave($data, $username);
        header('location:'.URL.'user');
    }

    public function delete($username){
        $this->model->delete($username);
        header('location:'.URL.'user');
    }
}