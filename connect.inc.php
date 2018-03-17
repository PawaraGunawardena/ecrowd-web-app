<?php
//echo 'Hello Man'

//phpinfo();

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'ecrowd';

$connection = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass);
$select_db = @mysqli_select_db($connection, $mysql_db);


if (!$connection || !$select_db){
	die('Error in the Database Connection. Please try again later');
}else{
	//echo 'Connected to the Database';
}
?>