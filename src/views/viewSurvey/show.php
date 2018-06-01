<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/11/2018
 * Time: 7:39 PM
 */


//echo $this->surveyWidgetList[0];
//if(isset(surveyWidgetList['attribute_type'])){
//    foreach($this->surveyWidgetList as $key => $value){
//        echo '<tr>';
//
//        echo '<div>'.' <td> '.$value['attribute_title'].' </td> '."            ";
//        echo ''.' <td> '.$value['attribute_type'].' </td> </div>';
//
////    echo '<tr>'.
////
////        '<a href='.URL.'viewSurvey/showSurveyForm/'.$value['form_name'].'>View</a>
////              ';
////    echo '</tr>';
//
////    <a href='.URL.'user/delete/'.$value['user_id'].'>Delete</a></td>
//    }

require('InterfaceCreate.php');
$interfaceCreate = new InterfaceCreate();
$interfaceCreate ->write_interface($this->surveyWidgetList, $this->formGeneral);


