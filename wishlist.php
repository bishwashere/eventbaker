<?php session_start();?>
<?php include('header.php');?>
<?php if(!isset($_SESSION['email'])){
	$backid=$_SESSION['item_id'];
	$_SESSION['back_page']="wishlist_processing.php?id=$backid";
	}

?>
		
			  
	<!--this is the place to start in php db for first 3 boxes and for next row the above box1 div has to be included -->		  
<?php

	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];

		$item_id=$_GET['id'];	

	

    	   


 
require('connect.php');
$email = $_SESSION['email'];
$result = mysqli_query($con,"SELECT * FROM gallery g where g.item_id in(select w.item_id from wishlist w where w.email='$email')");
	if(mysqli_num_rows($result) < 1){
echo "<h4 class='title'>Wishlist is empty</h4>
    	     	<p class='cart'>You have no items in your wishlist.<br>Click<a href='index.php'> here</a> to continue adding to your wishlist so that you can find them easy when you need them..</p>";
	}
while($row = mysqli_fetch_array($result))
  {
 echo "<div class='col_1_of_single1 span_1_of_single1'><a href='details.php?id=".$row['item_id']."'>
				     <div class='view1 view-fifth1'>
				  	  <div class='top_box'>
					  <h3 class='m_1'>" . $row['itemname'] . "</h3>
					  	<p class='m_2'>" .$row['city']."</p>
				         <div class='grid_img'>
						  <div class='css3'><img src='".$row['imgpath']."' alt=''/></div>
					          <div class='mask1'>
	                       		<div class='info'>Quick View</div>
			                </div>
	                </div>
                     <div class='price'>".$row['rent']." INR</div>
					  </div>
					   </div>";
					  $rating=$row['rating'];
			if($rating==1)
					{
					  echo "<span class='rating1'>
				        <input type='radio' class='rating-input' id='rating-input-1-5' name='rating-input-1'>
				        <label for='rating-input-1-5' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-4' name='rating-input-1'>
				        <label for='rating-input-1-4' class='rating-star'></label>
					<input type='radio' class='rating-input' id='rating-input-1-3' name='rating-input-1'>
				        <label for='rating-input-1-3' class='rating-star'></label>
					<input type='radio' class='rating-input' id='rating-input-1-2' name='rating-input-1'>
				        <label for='rating-input-1-2' class='rating-star'></label>
				        <input type='radio' class='rating-input' id='rating-input-1-1' name='rating-input-1'>
				        <label for='rating-input-1-1' class='rating-star'></label>&nbsp;
		    	      			</span>";
					}

			else if($rating==2)
					{
					  echo "<span class='rating1'>
				        <input type='radio' class='rating-input' id='rating-input-1-5' name='rating-input-1'>
				        <label for='rating-input-1-5' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-4' name='rating-input-1'>
				        <label for='rating-input-1-4' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-3' name='rating-input-1'>
				        <label for='rating-input-1-3' class='rating-star'></label>
					<input type='radio' class='rating-input' id='rating-input-1-2' name='rating-input-1'>
				        <label for='rating-input-1-2' class='rating-star'></label>
				        <input type='radio' class='rating-input' id='rating-input-1-1' name='rating-input-1'>
				        <label for='rating-input-1-1' class='rating-star'></label>&nbsp;
		    	      			</span>";
					}
			else if($rating==3)
					{
					  echo "<span class='rating1'>
				        <input type='radio' class='rating-input' id='rating-input-1-5' name='rating-input-1'>
				        <label for='rating-input-1-5' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-4' name='rating-input-1'>
				        <label for='rating-input-1-4' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-3' name='rating-input-1'>
				        <label for='rating-input-1-3' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-2' name='rating-input-1'>
				        <label for='rating-input-1-2' class='rating-star'></label>
				        <input type='radio' class='rating-input' id='rating-input-1-1' name='rating-input-1'>
				        <label for='rating-input-1-1' class='rating-star'></label>&nbsp;
		    	      			</span>";
					}
			else if($rating==4)
					{
					  echo "<span class='rating1'>
				        <input type='radio' class='rating-input' id='rating-input-1-5' name='rating-input-1'>
				        <label for='rating-input-1-5' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-4' name='rating-input-1'>
				        <label for='rating-input-1-4' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-3' name='rating-input-1'>
				        <label for='rating-input-1-3' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-2' name='rating-input-1'>
				        <label for='rating-input-1-2' class='rating-star1'></label>
				        <input type='radio' class='rating-input' id='rating-input-1-1' name='rating-input-1'>
				        <label for='rating-input-1-1' class='rating-star'></label>&nbsp;
		    	      			</span>";
					}
			else if($rating==5)
					{
					  echo "<span class='rating1'>
				        <input type='radio' class='rating-input' id='rating-input-1-5' name='rating-input-1'>
				        <label for='rating-input-1-5' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-4' name='rating-input-1'>
				        <label for='rating-input-1-4' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-3' name='rating-input-1'>
				        <label for='rating-input-1-3' class='rating-star1'></label>
					<input type='radio' class='rating-input' id='rating-input-1-2' name='rating-input-1'>
				        <label for='rating-input-1-2' class='rating-star1'></label>
				        <input type='radio' class='rating-input' id='rating-input-1-1' name='rating-input-1'>
				        <label for='rating-input-1-1' class='rating-star1'></label>&nbsp;
		    	      			</span>";
					}
		else 
					{
					  echo "<span class='rating1'>
				        <input type='radio' class='rating-input' id='rating-input-1-5' name='rating-input-1'>
				        <label for='rating-input-1-5' class='rating-star'></label>
					<input type='radio' class='rating-input' id='rating-input-1-4' name='rating-input-1'>
				        <label for='rating-input-1-4' class='rating-star'></label>
					<input type='radio' class='rating-input' id='rating-input-1-3' name='rating-input-1'>
				        <label for='rating-input-1-3' class='rating-star'></label>
					<input type='radio' class='rating-input' id='rating-input-1-2' name='rating-input-1'>
				        <label for='rating-input-1-2' class='rating-star'></label>
				        <input type='radio' class='rating-input' id='rating-input-1-1' name='rating-input-1'>
				        <label for='rating-input-1-1' class='rating-star'></label>&nbsp;
		    	      			</span>";
					}

//here ends the rating span
						echo "<ul class='list2'>
						  <li>
						  	<img src='images/plus.png' alt=''/>
						  	<ul class='icon1 sub-icon1 profile_img'>
							<li><a class='active-icon c1' href='delete.php?id=".$row['item_id']."'>REMOVE </a>
								<ul class='sub-icon1 list'>
									<li><h3>Remove from wishlist</h3><a href=''></a></li>
			<li><p>once removed,it won't be available in the wishlist</p></li>
								</ul>
							  </li>
							</ul>
						  </li>
					    </ul>
			    	    <div class='clear'></div>
			    	</a></div>";
 
}
}
else if(empty($email)){
		echo "You're not an authorized user. Please <a href='login.php'>login</a>.";
	}
	mysqli_close($con);

?>



				</div><!--box1 ends here-->   

			  
			  </div>
			  <div class="clear"></div>
			</div>
		   </div>
	     <?php include('footer.php');?>
