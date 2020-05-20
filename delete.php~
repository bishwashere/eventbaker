<?php session_start();?>
<?php include('connect.php');
$email=$_SESSION['email'];
$item_id=$_GET['id'];
$query="DELETE FROM wishlist WHERE email='$email' and item_id='$item_id'";
if (!mysqli_query($con,$query))
  {
	header('location:wishlist.php');
  }


mysqli_close($con);
header('location:wishlist.php');
?>
