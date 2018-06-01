<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/2/2018
 * Time: 12:42 AM
 */

class CreateNewSurvey extends Controller
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
//        Auth::handleLogin();
//        $this->view->js = array('dashboard/js/default.js');
    }

    function index()
    {

//        echo 'index, controller createNewSurveyForm';
        $this->view->render('createNewSurvey/index');

    }

    function createSurvey()
    {
        $formPartials = array();

        $formPartial = new FormPartial();
        $formPartial -> setFormName($_POST['surveyFormName']);
        $formPartial -> setAttributeTitle($_POST['widgetName']);
        $formPartial -> setAttributeType($_POST['widgetType']);
        $formPartial -> setMobile(false);

        array_push($formPartials, $formPartial);
//        $formPartials -> $formPartial;

        $formGeneral = new FormGeneral();
        $formGeneral -> setFormName($_POST['surveyFormName']);
        $formGeneral  -> setTableName($_POST['surveyFormName']);
        $formGeneral  -> setUsername(Session ::get('loggedUser'));



//        foreach($formPartials as $me){
//            echo $me->getFormName();return false;
//        }
        //@TODO Error checking
//        echo $formPartials; return false;

        $this->model->create_survey_form_table($formGeneral,$formPartials);
        $this->model->insert_survey_form_data($formGeneral);
        $this->model->insert_widget_data($formPartial);

//        header('location:'.URL.'user');
//        header('location:'.URL.'login');

//        echo 'index, controller createNewSurveyForm';
//        $this->view->render('createNewSurvey/index');
        header('location:'.URL.'createNewSurvey');



    }

}