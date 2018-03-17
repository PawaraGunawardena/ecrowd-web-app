<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/11/2018
 * Time: 9:33 AM
 */
class Model{

    function __construct()
    {
        $this->database = new Database(DB_TYPE,DB_HOST,DB_NAME,DB_USER,DB_PASS);
    }
}