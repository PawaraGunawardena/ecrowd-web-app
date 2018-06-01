<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/29/2018
 * Time: 9:20 PM
 */

class FillDynamicSurvey extends  Controller {
    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');


        if ($logged == false) {
            Session::destroy();
            header('location: login');
            exit;
        }
    }



    function fillSurvey($table_name){
        render(URL.'/viewSurvey/');
    }
}