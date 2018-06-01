<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/18/2018
 * Time: 7:26 AM
 */

class collectData extends Controller
{
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

    function index(){
//        echo "Hiiii, view surveys";

        $this->view->surveyNameList = $this->model->get_all_survey_name();

        $this->view->render('viewSurvey/index');
    }

    function collectData($form_name){

        $this->view->surveyWidgetList = $this->model->get_survey_widget($form_name);
        $this->view->data = $this->model->get_data($form_name);

        $surveyGeneralDetails = $this->model->get_survey_general_details($form_name);
//
////        echo $surveyGeneralDetails;return false;
//
//        $formGeneral = new FormGeneral();
//        $formGeneral ->setUsername($surveyGeneralDetails['username']);
//        $formGeneral ->setTableName($surveyGeneralDetails['table_name']);
//        $formGeneral ->setFormName($surveyGeneralDetails['form_name']);

//        $this->view->formGeneral = $formGeneral;

//        echo $formGeneral->getUsername();
//        return false;

        $this->view->render('collectData/show');
    }
}