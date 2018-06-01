<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/29/2018
 * Time: 8:31 AM
 */


class CreateNewSurvey_model extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    function insert_survey_form_data($formGeneral){
//        $query  = "INSERT INTO form (
//                                form_name,
//                                table_name,
//                                user_name
//                                )
//                    VALUES
//                                (".
//                                    $data['surveyFormName'].",".
//                                    $data['surveyFormName'].",".
//                                    $data['username'].
//                                ");";
//        echo $query;
//        return false;


        $this-> database ->insert('form', array(
            'form_name' => $formGeneral-> getFormName(),
            'table_name' => $formGeneral-> getTableName(),
            'username' => $formGeneral-> getUsername()
        ));
//        echo $data['username'];


    }

    function insert_widget_data($formPartial){
        $this->database->insert('form_partial',array(

            'form_name' => $formPartial -> getFormName(),
            'attribute_title' => $formPartial -> getAttributeTitle(),
            'attribute_type' => $formPartial -> getAttributeType(),
            'mobility' => $formPartial -> getMobile()
        ));
    }

    function create_survey_form_table($formGeneral,$formPartials){

        $query = "CREATE TABLE ".$formGeneral->getTableName()."( username VARCHAR(50) PRIMARY KEY";

        foreach($formPartials as $formPartial){
            $query = $query.", ".$formPartial->getAttributeTitle();
            $query = $query." VARCHAR(50) ";
        }

        $query = $query." );";

        $this->database->create_table($query);


    }
}