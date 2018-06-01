<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/12/2018
 * Time: 12:17 AM
 */
class InterfaceCreate{
    function __construct()
    {
//$this->write_text_field();
//$this->write_interface();

    }

    public function write_interface($array, $form_general, $widgetList)
    {

        echo '<div style="padding: 100px;">'. '<div ><h1> '.$form_general->getFormName().' Survey</h1></div>'.

            '<form action = "'.URL.'fillDynamicSurvey/fillSurvey/'.$form_general -> getTableName().' method="POST">';

//        for(int i =0 ; i<= 10 ;i++){}
        foreach ($array as $key => $value) {


            echo '</br>';
           $widget_type = $value['attribute_type'] . ' </td> </div>';
//           echo $widget_type;
            if(strcmp((String)$widget_type , "Text")){
                $this->write_text_field($value['attribute_title']);

            }
            elseif (strcmp((String)$widget_type , "dropdown")){
                $this->write_dropdown_field($value['attribute_title']);
            }
            elseif(strcmp((String)$widget_type , "radio_button")){
                $this->write_radiobutton_field($value['attribute_title']);
            }
            elseif(strcmp((String)$widget_type , "checkbox")){
                $this->write_checkbox_field($value['attribute_title']);
            }

        }
        echo '</br>';
        $this->write_button_field();
        echo '</form>';
    }

    public function write_text_field($nameOftheWidget){
        echo '<div ><label for="'.$nameOftheWidget.'" class="col-md-0 control-label">'.$nameOftheWidget .'</label> </br> <div class="col-md-6" style="padding-left: 55px;"><input class="form-control" type="text" name="'.$nameOftheWidget.'"></div><br></div>';

    }

    public function write_button_field(){
        echo '<div class="col-md-8 col-md-offset-4"><input type="submit" value="Submit" class="btn btn-primary" style="padding-left: 10px;"></div><br>';


    }

    public function write_dropdown_field($nameOftheWidget){
        echo '<div><label>'.$nameOftheWidget .'</label>

       
        <select name="'.$nameOftheWidget.'">
            <option value="text">Text</option>
            <option value="button">Button</option>
            <option value="dropdown">Drop Down</option>
            <option value="radioButton">Radio Button</option>
        </select>
                <br/><br>';

    }

    public function write_radiobutton_field($nameOftheWidget){
        echo '<div><label>'.$nameOftheWidget .'</label>  <input type="text" name=".$nameOftheWidget"><br></div>';
    }

    public function write_checkbox_field($nameOftheWidget){
        echo '<div><label>'.$nameOftheWidget .'</label>  <input type="text" name=".$nameOftheWidget"><br></div>';

    }

}