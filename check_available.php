<?php

	session_start();
	include('header.php');
	$booking_date = $_POST['date'];
	$no_of_days = $_POST['days'];
	$item_id = $_POST['ad'];
			
	$con = mysqli_connect("localhost","root","","celebrations");
	
	$email = mysqli_real_escape_string($con, $email);
	$sql = "SELECT * FROM bookings where (product_id=$item_id)and(book_date like '%$booking_date%')";
	$query = mysqli_query($con, $sql);
	if(mysqli_num_rows($query) < 1){
		//include('includes/audi_listing.php');
		echo "<div id='container' style='width:100%'><center><h3 style='color:red;align:center'>";
			echo "the auditoium";
			echo " ".$item_id." is available on ";
			echo $booking_date;
			echo "</h3></center></div>";
			echo "
			";?>


<div class="wrap">
<div class="right"style="float:right">hello here goes some descriptions regarding<br> the secure transactions through paypal and the trust worthiness of the website</div>

	<h1>Simple paypal integration using PHP - Ready to use script</h1>
<style>
.form1 input,password,select,textarea{
	display:block;
	color:#4D4949;
	border:1px solid #EBEBEB;
	border-radius: 0.3em;
	-webkit-border-radius:0.3em;
  	-moz-border-radius:0.3em;
 	 -o-border-radius:0.3em;
 	 margin-bottom: 10px;
}

</style>
    <form class="form1" action="paypal.php?sandbox=1" method="post" > <?php // remove sandbox=1 for live transactions ?>
    <input type="hidden" name="action" value="process" />
    <input type="hidden" name="cmd" value="_cart" /> <?php // use _cart for cart checkout ?>
    <input type="hidden" name="currency_code" value="USD" />
    <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" />
    <table>
    <tr>
        <td><input type="hidden" name="product_id" value="<?php echo $item_id ?>" /></td>
    </tr>
    <tr>
        <td><input type="hidden" name="product_name" value="<?php echo $_SESSION['name'];?>" /></td><!--edit like this-->
    </tr>
    <tr>
        <td><input type="hidden" name="product_quantity" value="1" /></td>
    </tr>
    <tr>
        <td><input type="hidden" name="product_amount" value="<?php echo $_SESSION['rent'];?>" /></td>
    </tr>
    <tr>
        <td><label>Payer First Name</label></td>
        <td><input type="text" class="form-control" name="payer_fname" placeholder="Firstname" /></td>
    </tr>
    <tr>
        <td><label>Payer Last Name</label></td>
        <td><input type="text" class="form-control" name="payer_lname" placeholder="Lastname" /></td>
    </tr>
    <tr>
        <td><label>Payer Address</label></td>
        <td><input type="text" class="form-control" name="payer_address" placeholder="Current address" /></td>
    </tr>
    <tr>
        <td><label>Payer City</label></td>
        <td><input type="text" class="form-control" name="payer_city" placeholder="your city" /></td>
    </tr>
    <tr>
        <td><label>Payer State</label></td>
        <td><input type="text" class="form-control" name="payer_state" placeholder="Your state" /></td>
    </tr>    
    <tr>
        <td><label>Payer Zip</label></td>
        <td><input type="text" class="form-control" name="payer_zip" placeholder="zip/pincode" /></td>
    </tr>
    <tr>
        <td><label>Payer Country</label></td>
        <td><input type="text" class="form-control" name="payer_country" placeholder="country" /></td>
    </tr> 
    <tr>
        <td><label>Payer Email</label></td>
        <td><input type="text" name="payer_email" class="form-control" placeholder="email id" /></td>
    </tr>
	<tr>
        <td><label>Payer phone</label></td>
        <td><input type="text" class="form-control" name="phone" placeholder="phone no:" /></td>
    </tr>
	<tr>
        <td><input type="hidden" name="book_date" value="<?php echo $book_date;?>" /></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="Continue" /></td>
    </tr>
    </table>
    </form>
</table>
</div>
<?php
	}
	else{
	echo "the auditorium is not available on ".$booking_date."";	
	}
?>

<?php include('footer.php');?>
