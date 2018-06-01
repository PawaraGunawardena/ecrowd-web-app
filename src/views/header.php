<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/11/2018
 * Time: 8:38 AM
 */

//This is the header file that calls or requires for every views
//But this calls from the libs/Views by require()
//It helps to avoid code duplications

?>
<html>
    <head>
<!--        Header file head-->

        <title>
            eCrowd
        </title>

        <link rel= "stylesheet" href="<?php echo URL;?>public/css/default.css"/>

        <script type="text/javascript" src="<?php echo URL;?>public/js/jquery.js"></script>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


        <?php
            if (isset($this->js)){
                    foreach($this->js as $js) {

                        echo '<script type="text/javascript" src="' . URL .'views/'. $js . '"></script>"';
                    }
                }
        ?>

    </head>

    <body>

    <?php Session::init();?>

        <div id="header" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" ">
<!--            Header body-->
            <br/>
            <?php if (Session::get('loggedIn') == false) {?>

                <a href="help">Help</a>
                <a href="index">E Crowd</a>
                <a href="<?php echo URL; ?>register">Register</a>

<!--                <a href="avilableSurveys">Surveys Forms</a>-->
            <?php } ?>
<!--            <a href="login">Login</a>-->
            <?php if (Session::get('loggedIn') == true) {?>
                <a href="index">E Crowd</a>
<!--                <a href="--><?php //echo URL; ?><!--dashboard">Dashboard</a>-->
<!--                <a href="--><?php //echo URL; ?><!--note">Note</a>-->
                <a href="<?php echo URL; ?>createNewSurvey">Create New Survey Form</a>
                <a href="<?php echo URL; ?>viewSurvey">Avilable Survey Forms</a>
                <?php if (Session::get('role') == 'admin') {?>
                    <a href="<?php echo URL; ?>user">User</a>
                <?php } ?>
<!--                <a href="--><?php //echo URL; ?><!--user/edit/".--><?php //echo Session ::get('loggedUser'); ?><!-- Edit Profile</a>-->

                <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
            <?php } else{ ?>
                <a href="<?php echo URL; ?>login">Login</a>
            <?php } ?>

        </div>
    </body>
</html>

