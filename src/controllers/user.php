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
    }

    public function edit($id){
        //individual user
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('user/edit');
    }

    public function editSave($id){
        $data = array();

        $data['user_id'] = $id;
        $data['username'] = $_POST['username'];
        $data['email' ]= $_POST['email'];
        $data['first_name'] = $_POST['first_name'];
        $data['last_name' ]= $_POST['last_name'];
        $data['password' ]= $_POST['password'];
        $data['role' ]= $_POST['role'];

        //@TODO Error checking

        $this->model->editSave($data);
        header('location:'.URL.'user');
    }

    public function delete($id){
        $this->model->delete($id);
        header('location:'.URL.'user');
    }
}