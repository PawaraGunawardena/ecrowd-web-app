<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/12/2018
 * Time: 9:51 AM
 */

class Dashboard extends Controller{
    function __construct(){
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');


        if($logged == false){
            Session::destroy();
            header('location: login');
            exit;
        }
//        Auth::handleLogin();
        $this->view->js = array('dashboard/js/default.js');
    }

    function index(){

        echo 'index, controller dashboard';
        $this->view->render('dashboard/index');

    }

    function logout(){
        Session::destroy();
        header('location: ../login');
        exit;
    }

    function xhrInsert(){
        $this->model->xhrInsert();
    }

    function xhrGetListings(){
        $this->model->xhrGetListings();
    }

    function xhrDeleteListing(){
//        $this->view->render('help/index');
        $this->model->xhrDeleteListing();



    }
//    public function xhrDeleteListing() {
//        $id = $_POST['id'];
//        $res = $this->model->deleteListing($id);
//        echo json($res);
//    }
}