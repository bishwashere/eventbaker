<?php session_start();

include('connect.php');

	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
		$item_id=$_GET['id'];	
	}
	if(empty($email))
	{
		header('location:wishlist.php');
	}

    	else
	{ 
		if(isset($_SESSION['item_id']))
		{

			if(empty($item_id))
			{
				header('location:wishlist.php');				
			}
			else
			{


				$item_id=$_GET['id'];
				$email = $_SESSION['email'];	
$query="insert into wishlist(item_id,email) values('$item_id','$email')";
if (!mysqli_query($con,$query))
  {
				header('location:wishlist.php');
  }
echo "1 record added";

mysqli_close($con);

				

				$item_id=$_GET['id'];
				header('location:wishlist.php');
			}
		}
		else
		{
			echo "<h4 class='title'>Shopping cart is empty</h4>
    	     	<p class='cart'>You have no items in your shopping cart.<br>Click<a href='index.php'> here</a> to continue shopping</p>";
				header('location:wishlist.php');
		}
	}
?>
