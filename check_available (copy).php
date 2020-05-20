<?php

	session_start();
	include('header.php');
	$book_date = $_POST['date'];
	$no_of_days = $_POST['days'];
	$audi_id = $_POST['ad'];
			
	$con = mysqli_connect("localhost","root","","celebrations");
	
	$email = mysqli_real_escape_string($con, $email);
	$sql = "SELECT * FROM audi_booking where book_date=$book_date and audi_id=$audi_id;";
	$query = mysqli_query($con, $sql);
	if(mysqli_num_rows($query) < 1){
		//include('includes/audi_listing.php');
		echo "<div id='container' style='width:100%'><center><h3 style='color:red;align:center'>";
			echo "the auditoium";
			echo " ".$_SESSION['name']." is available on ";
			echo $book_date;
			echo "</h3></center></div>";
			echo "
			";
	}
	else{
	echo "the auditorium is not available on ".$book_date."";	
	}
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

	
?>
