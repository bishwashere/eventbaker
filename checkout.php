<?php session_start();
 include('header.php')?>
       <div class="login">
         <div class="wrap">
<?php
	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		echo "Welcome,". $email. "!";
		echo "<a href='logout.php'>Logout</a>";
	}
	if(empty($email)){
		echo "You're not an authorized user. Please <a href='login.php'>login</a>.";
	}

    	    else
{ 
	"<h4 class='title'>Shopping cart is empty</h4>
    	     <p class='cart'>You have no items in your shopping cart.<br>Click<a href='index.php'> here</a> to continue shopping</p>";
}
?>
</div>
		</div>
       <?php include('footer.php')?>
