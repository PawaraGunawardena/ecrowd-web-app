<?php
class MyError extends Controller{

    function __construct(){
        parent::__construct();
//        echo ' <br>we are in Errors controller<br>';

        $this->view->msg = 'There is an error in the request. Check and try again.';
        $this -> view -> render('error/index');
    }


}

