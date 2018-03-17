<?php
if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$password_hash = md5($password);
	
	//echo 'OK before empty check after isset<br>';
	
	if(!empty($username) && !empty($password)){
		//echo 'OK<br>';
		$query = "SELECT 'user_id' FROM ecrowd.user WHERE username='$username' AND password = '$password'";
		$query_run = mysqli_query($connection, $query) ;
		//$mysql_result = mysqli_result($connection, $query);
		$rowcount=mysqli_num_rows($query_run);
		
		
		//$row = $query_run->fetch_assoc();
		//$query_number_of_rows = $row['COUNT(*)'];
		
		if($rowcount == 0){
			echo 'Invalid username/passwor combination';
		}else if($rowcount == 1) {
			header("Location: file.php");
		}
		mysqli_close($connection);
		
	}else{
		echo 'Enter your username and password';
	}
}

?>

<form action = "<?php echo $current_file ?>" method="POST">
	Username : <input type="text" name="username"><br><br>
	Password : <input type="password" name="password"><br><br>
	<input type="submit" value="Log In">
	

</form>