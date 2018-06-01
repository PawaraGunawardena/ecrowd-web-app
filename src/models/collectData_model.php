<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/11/2018
 * Time: 7:04 PM
 */

class CollectData_Model extends Model{


    function __construct(){
        parent::__construct();

//        echo 'View Survey Model Works';
    }

    function  get_all_survey_name(){

        return $this->database->select('SELECT form_name FROM form');
    }

    function get_data($form_name){
        $table_name =  $this->database->select("SELECT table_name FROM form WHERE form_name = '".$form_name."'");

        return $this->database->select("SELECT * FROM ".$table_name.";");
//        echo "Balaaaaaaaaaaaaaaaaaaalaaaaaaaaaaaaaaaaaaaaa";

    }

    function get_survey_general_details($form_name){
        $list =  $this->database->select("SELECT * FROM form WHERE form_name = '".$form_name."'");
        return $list[0];
//        echo $list[0]['form_name']; return false;

    }
    function get_survey_widget($form_name){
        return $this->database->select("SELECT * FROM form_partial WHERE form_name = '".$form_name."'");
//        echo "Balaaaaaaaaaaaaaaaaaaalaaaaaaaaaaaaaaaaaaaaa";

    }

}