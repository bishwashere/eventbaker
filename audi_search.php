<?php session_start();?>
<?php include('header.php');?>
       <?php include('sidebar.php')?>
		
			  
	<!--this is the place to start in php db for first 3 boxes and for next row the above box1 div has to be included --><?php


 
require('connect.php');
$email = $_SESSION['email'];
$result = mysqli_query($con,"SELECT * FROM gallery where (category='auditorium')and(itemname like '%$s_key%' or city like '%$s_key%')");
while($row = mysqli_fetch_array($result))
  {
 echo "<div class='col_1_of_single1 span_1_of_single1'><a href='single.php?id=".$row['item_id']."'>
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
					   </div>
					   <span class='rating1'>
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
		    	      </span>
						<ul class='list2'>
						  <li>
						  	<img src='images/plus.png' alt=''/>
						  	<ul class='icon1 sub-icon1 profile_img'>
							  <li><a class='active-icon c1' href='#'>WISHLIST </a>
								<ul class='sub-icon1 list'>
									<li><h3>sed diam nonummy</h3><a href=''></a></li>
			<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p></li>
								</ul>
							  </li>
							</ul>
						  </li>
					    </ul>
			    	    <div class='clear'></div>
			    	</a></div>";
 }
	mysqli_close($con);
	
?>



				</div><!--box1 ends here-->   

			  
			  </div>
			  <div class="clear"></div>
			</div>
		   </div>
	     <?php include('footer.php');?>
