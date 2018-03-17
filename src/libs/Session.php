<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/12/2018
 * Time: 11:03 AM
 */

class Session {

    public static function init()
    {
       @session_start();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key){

        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    public static function destroy()
    {
//        unset($_SESSION);
        session_destroy();
    }
}