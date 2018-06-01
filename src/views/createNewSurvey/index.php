<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/2/2018
 * Time: 12:56 AM
 */
//echo "HIIIII NEW SURVEY";


?>

<!--<html>-->
<!--    <head>-->
<!---->
<!---->
<!--        <title>-->
<!--            eCrowd|Create New Survey-->
<!--        </title>-->
<!---->
<!---->
<!--    </head>-->

<div style="padding: 100px;">
    <h1>Create New Survey</h1>

<!--            <div class="row col-md-9 col-lg-9 col-sm-9 pull-left " style="background: white;">-->

                <!--    <body>-->
                <div id="content">
<!--                    <div class="row  col-md-12 col-lg-12 col-sm-12" >-->

                                        <form action = "<?php echo URL;?>createNewSurvey/createSurvey" method="POST">

                                                <label for="form_name" class="col-md-0 control-label">Survey Form Name :</label><br><br>
                                            <div class="col-md-6" style="padding-left: 55px;">
                                                <input id="text" type="text" class="form-control" name="surveyFormName" value="" required><br/><br/>
                                            </div>


                                                <label for="widget_add_section" class="col-md-5 control-label"><h2>Add a Widget</h2></label><br>


                                                <label for="widget_name" class="col-md-0 control-label">Widget Name :</label><br>

<!--                                            <input type="text" name="widgetName"><br><br>-->
                                            <div class="col-md-6" style="padding-left: 55px;">
                                                <input id="text" type="text" class="form-control" name="widgetName" value="" required><br/>
                                            </div>

                                                <label for="widget_type" class="col-md-0 control-label">Widget Type :</label><br><br>
                                            <div class="col-md-6" style="padding-left: 55px;">
                                                <select name="widgetType" class="form-control">
                                                    <option value="text">Text</option>
                                                    <option value="button">Button</option>
                                                    <option value="dropdown">Drop Down</option>
                                                    <option value="radioButton">Radio Button</option>
                                                </select><br/><br/>
                                            </div>

                                            <br/><br>
                                            <!--                Email : <input type="text" name="email"><br><br>-->
                                            <!--                First Name : <input type="text" name="first_name"><br><br>-->
                                            <!--                Last Name : <input type="text" name="last_name"><br><br>-->
                                            <input type="submit" value="Submit Widget" class="btn btn-primary">

                                            <br/><br>
                                            <input type="submit" value="Submit Form" class="btn btn-primary">



                                        </form>
                    </div>
                </div>
            </div>
</div>

<!--    </body>-->
<!--</html>-->

