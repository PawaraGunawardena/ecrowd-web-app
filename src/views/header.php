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

        <?php
            if (isset($this->js)){
                    foreach($this->js as $js) {

                        echo '<script type="text/javascript" src="' . URL .'views/'. $js . '"></script>"';
                    }
                }
        ?>

    </head>

    <body>
    <?php echo URL; ?>
    <?php Session::init();?>

        <div id="header">
<!--            Header body-->
            <br/>
            <?php if (Session::get('loggedIn') == false) {?>
                <a href="index">Index</a>
                <a href="register">Register</a>
                <a href="help">Help</a>
            <?php } ?>
<!--            <a href="login">Login</a>-->
            <?php if (Session::get('loggedIn') == true) {?>
                <a href="<?php echo URL; ?>dashboard">Dashboard</a>
                <a href="<?php echo URL; ?>note">Note</a>
                <?php if (Session::get('role') == 'admin') {?>
                    <a href="<?php echo URL; ?>user">User</a>
                <?php } ?>
                <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
            <?php } else{ ?>
                <a href="<?php echo URL; ?>login">Login</a>
            <?php } ?>

        </div>
    </body>
</html>

