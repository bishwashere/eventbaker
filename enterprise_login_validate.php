<?php
	session_start();
	$email = $_POST['login_email'];
	$password = $_POST['login_password'];
	
	$con = mysqli_connect("localhost","root","","celebrations");
	
	$email = mysqli_real_escape_string($con, $email);
	$sql = "SELECT password, salt FROM gallery_admins WHERE email = '$email';";
	$query = mysqli_query($con, $sql);
	if(mysqli_num_rows($query) < 1){
		$message = "Login Failed!";
		header("location: enterprise_login.php?message=". $message);
	}
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	$hash = hash('sha256', $row['salt'] . hash('sha256', $password) );
	if($hash != $row['password']){
    	$message = "Login Failed!";
		header("location: enterprise_login.php?message=". $message);
	}else{
		session_regenerate_id ();
		$_SESSION['enterprise_email'] = $email;
		header("location: enterprises/index.php");
	}
?>
