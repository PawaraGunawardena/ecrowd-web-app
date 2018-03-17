<?php
/*
require 'connect.inc.php';

$query = "SELECT username, password FROM user" ;
$query_run = mysqli_query($connection, $query);

if($query_run){
	while($query_row = mysqli_fetch_assoc($query_run)){
		$username = $query_row['username'];
		$password = $query_row['password'];
		echo '<br>';
		echo $username.' has '.$password.' password. <br>'; 
	}
}*/

//require 'core.inc.php';
//require 'connect.inc.php';
//require 'loginform.inc.php';

//echo $current_file;

//echo 'me';
//Can use the autoloader here
//use n auto loader

//require 'config/paths.php';
//require 'config/database.php';
//require 'config/constants.php';
require 'config.php';
//require 'util/Auth.php';

// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class) {
    require LIBS . $class .".php";
}

//require 'libs/Bootstrap.php';
//require 'libs/Controller.php';
//require 'libs/Model.php';
//require 'libs/View.php';
//
//
////library
//require 'libs/Database.php';
//require 'libs/Session.php';
//require 'libs/Hash.php';
//
//require 'config/paths.php';
//require 'config/database.php';
//require 'config/constants.php';



$app = new Bootstrap();



?>

