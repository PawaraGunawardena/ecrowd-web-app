<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/17/2018
 * Time: 6:52 PM
 */

class Auth
{

    public static function handleLogin()
    {
        @session_start();
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            header('location: login');
            exit;
        }
    }

}