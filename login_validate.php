<?php
	session_start();
	$email = $_POST['login_email'];
	$password = $_POST['login_password'];
	
	$con = mysqli_connect("localhost","root","root","celebrations");
	
	$email = mysqli_real_escape_string($con, $email);
	$sql = "SELECT password, salt FROM members WHERE email = '$email';";
	$query = mysqli_query($con, $sql);
	if(mysqli_num_rows($query) < 1){
		$message = "<p class=m_desc>Login Failed!</p>";
		header("location: login.php?message=". $message);
	}
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	$hash = hash('sha256', $row['salt'] . hash('sha256', $password) );
	if($hash != $row['password']){
    	$message = "<p class=m_desc>Login Failed!</p>";
		header("location: login.php?message=". $message);
	}else{
		session_regenerate_id ();
		$_SESSION['email'] = $email;
	if(isset($_SESSION['backlink'])){
		$itemid=$_SESSION['wish_id'];
		$query="insert into wishlist(item_id,email) values('$itemid','$email')";
		}
		else{
		if(isset($_SESSION['page'])){
		$pageno=$_SESSION['page'];
		if($pageno){
		header("location:$_SESSION[back_page]?id=".$_SESSION['id']."&search_key=".$_SESSION['skey']."&page=".$_SESSION['page']."");
		}
		}
	if(!$pageno){	
	header("location:$_SESSION[back_page]?id=".$_SESSION['id']."&search_key=".$_SESSION['skey']."");}
	}
header("location:index.php");
	}

?>
