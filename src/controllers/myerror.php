<?php
class MyError extends Controller{

    function __construct(){
        parent::__construct();
        echo ' <br>we are in Errors controller<br>';

        $this->view->msg = 'This is the error message passed by controller to the view';
        $this -> view -> render('error/index');
    }


}

