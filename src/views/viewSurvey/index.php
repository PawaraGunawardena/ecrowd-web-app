<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/11/2018
 * Time: 6:38 PM
 */

//echo 'view new survey';
echo '<div style="padding: 100px; padding-right: 450px;">';
foreach($this->surveyNameList as $key => $value){
    echo '<tr>';

    echo '<li class="list-group-item"><div class="col-md-6" style="padding-left: 55px;">'.' <td> <h3>'.$value['form_name'].' </h3></td> '

    .'<tr>'.

              '<br><a class="btn btn-secondary"  href='.URL.'viewSurvey/showSurveyForm/'.$value['form_name'].'><div>View</div></a>
              '
   . '</tr>'.'</div></li></tr>';

//    <a href='.URL.'user/delete/'.$value['user_id'].'>Delete</a></td>
}
echo '</div>';