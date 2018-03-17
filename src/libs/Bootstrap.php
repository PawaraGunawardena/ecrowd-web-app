<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/10/2018
 * Time: 11:10 PM
 */

class Bootstrap
{
    private $_url = null;
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url']:null ;//Check the url is set or nnot
        $url = rtrim($url, '/');//Remove any ending / notations

        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);//
//        print_r($url);
//        $this -> _getUrl();


        //when url first attribute not exist
        //giving controller for the route index when url not specified
        if(empty($url[0])){
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        //when url first attribute exist routing
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            //throw new Exception("The file '$file' does not exist");
            require 'controllers/myerror.php';
//              include_once('controllers/myerror.php');
            $controller_error = new MyError();
//
            return false;
        }


        //when url has second attribute
        $controller = new $url[0];
        $controller->loadModel($url[0]);
        //Looking whether there is an any second method called (second attribute exists for the route
        //remember already controller selected by requireing and initiated by $controller variable

        if (isset($url[2])) {//if any value posted or getted by url

            //if method have any additional parameters then this called
            $controller->{$url[1]}($url[2]);

        } else{//if no additional vaoues through url

            //when method no need any additional parameters
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
            else{

                $controller->index();
            }
        }

    }

//    private function _getUrl(){//underscore begins for privte & protected methods
//        $url = isset($_GET['url']) ? $_GET['url']:null ;//Check the url is set or nnot
//        $url = rtrim($url, '/');//Remove any ending / notations
//
//        $url = filter_var($url, FILTER_SANITIZE_URL);
//        $url = explode('/', $url);//
////        print_r($url);
//    }
}




//Below code is not needed.. Kept for any future needs
/*
$reuesting_url = $_SERVER['PHP_SELF'];
$url_parts = parse_url($reuesting_url);
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

//echo $url_parts['path'];
//require 'controllers/'.$url.'.php';
//$controller = new $url;

*/