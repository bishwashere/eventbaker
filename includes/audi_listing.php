 <div class="clear"></div>
     	</div>
       </div>

       <div class="login">
         <div class="wrap">
     	    

<?php include('sidebar.php');?>
		</div>
			    
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$rec_limit = 15;
$s_key=$_GET['search_key'];
$con = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('celebrations');
/* Get total number of records */
$sql = "SELECT count(audi_id) FROM auditoriums";
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row = mysql_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];

if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT * ".
       "FROM auditoriums where audiname like '%$s_key%' or city like '%$s_key%'".
       "LIMIT $offset, $rec_limit";

$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
 echo "<div class='col_1_of_single1 span_1_of_single1'><a href='audi_booking.php?id=".$row['audi_id']."'>
				     <div class='view1 view-fifth1'>
				  	  <div class='top_box'>
					  <h3 class='m_1'>" . $row['audiname'] . "</h3>
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
					   //here starts the script for rating span
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
							  <li><a class='active-icon c1' href='#'>WISHLIST </a>
								<ul class='sub-icon1 list'>
									<li><h3>add to wishlist</h3><a href=''></a></li>
			<li><p>add this product to wishlist and we will process your request</p></li>
								</ul>
							  </li>
							</ul>
						  </li>
					    </ul>
			    	    <div class='clear'></div>
			    	</a></div>";
 }

?>



				</div><!--box1 ends here-->   

			  
			  </div>






			  <div class="clear"></div>
			</div>
		   </div>
<?php echo "<div class='footer'><div class='footer-middle'><div class='wrap'><div class='section'>";
	if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"auditorium.php?page=$last\" >Last</a> |";
   echo "<a href=\"auditorium.php?page=$page\">Next</a>";
}
else if( $page == 0 )
{
   echo "<a href=\"auditorium.php?search_key&page=$page\">Next</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"auditorium.php?search_key&page=$last\" >Last</a>";
}
echo "</div></div></div></div>";
mysql_close($con);?>
