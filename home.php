<?php
	session_start();
	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		include('checkout.php');


	}
	if(empty($email)){
		echo "You're not an authorized user. Please <a href='index.php'>login</a>.";
	}
?>
