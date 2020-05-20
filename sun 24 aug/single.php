<?php include('header.php');?>
       <?php include('sidebar.php')?>
     
		<div class="cont span_2_of_3">
			  <div class="labout span_1_of_a1">
				
			</div>
			<div class="cont1 span_2_of_a1">
				<h3 class="m_3">Lorem ipsum dolor sit amet</h3>
<img src="images/pic6.jpg" style="height:250px;width:100%">
				
				<div class="price_single">
							  <span class="reducedfrom">$66.00</span>
							  <span class="actual">$12.00</span><a href="#">click for offer</a>
							</div>
				<div class="btn_form">
				   <form>
					 <input type="submit" value="BOOK NOW!" title="">
				  </form>
				</div>
				<ul class="add-to-links">
    			   <li><span class="rating">
				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
		        	  (45)
		    	      </span></li>
    			</ul><br><br>
    			<p class="m_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    			
                <div class="social_single">	
				   <ul>	
					  <li class="fb"><a href="#"><span> </span></a></li>
					  <li class="tw"><a href="#"><span> </span></a></li>
					  <li class="g_plus"><a href="#"><span> </span></a></li>
					  <li class="rss"><a href="#"><span> </span></a></li>		
				   </ul>
			    </div>
			</div>
			<div class="clear"></div>
     
     
         <ul id="flexiselDemo3">
			<li><img src="images/pic11.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pic10.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			<li><img src="images/pic9.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
			<li><img src="images/pic8.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pic7.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	 <div class="toogle">
     	<h3 class="m_3">Product Details -</h3> 
<?php require('connect.php');?>
<?php 

$name=$_GET['id'];
$result = mysqli_query($con,"SELECT * FROM auditoriums WHERE audi_id='$name' ");
while($row = mysqli_fetch_array($result))
  {
	echo $row[1];


 ?>
<table>
<tr>
<td> <?php echo $row[2]; } ?></td>
</tr>

</table>


     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>					
	 <div class="toogle">
     	<h3 class="m_3">Product Reviews</h3>
     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>
     </div>
     <div class="clear"></div>
	 </div>
     </div>
	  <div class="footer">
       	 <div class="footer-top">
       		<div class="wrap">
       			   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	 <ul class="f_list">
				  	 	<li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over £100*</span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
				  	 </ul>
				   </div>
				  <div class="clear"></div>
			 </div>
       	    </div>
       	    <div class="footer-middle">
       	 	  <div class="wrap">
       	 		<div class="section group">
				<div class="col_1_of_middle span_1_of_middle">
					<dl id="sample" class="dropdown">
			        <dt><a href="#"><span>Please Select a Country</span></a></dt>
			        <dd>
			            <ul>
			                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
			                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
			                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
			                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
			                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
			                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
			            </ul>
			         </dd>
   				    </dl>
   				 </div>
				<div class="col_1_of_middle span_1_of_middle">
					<ul class="f_list1">
						<li><span class="m_8">Sign up for email and Get 15% off</span>
						<div class="search">	  
							<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="Subscribe" id="submit" name="submit">
							<div id="response"> </div>
			 			</div><div class="clear"></div>
			 		    </li>
					</ul>
				</div>
				<div class="clear"></div>
			   </div>
       	 	</div>
       	 </div>
       	 <div class="footer-bottom">
       	 	<div class="wrap">
       	 		<div class="section group">
				<div class="col_1_of_5 span_1_of_5">
					<h3 class="m_9">Shop</h3>
					<ul class="sub_list">
						<h4 class="m_10">Men</h4>
					    <li><a href="shop.php">Men's Shoes</a></li>
			            <li><a href="shop.php">Men's Clothing</a></li>
			            <li><a href="shop.php">Men's Accessories</a></li>
			        </ul>
			             <ul class="sub_list">
				            <h4 class="m_10">Women</h4>
				            <li><a href="shop.php">Women's Shoes</a></li>
				            <li><a href="shop.php">Women's Clothing</a></li>
				            <li><a href="shop.php">Women's Accessories</a></li>
				         </ul>
				         <ul class="sub_list">
				            <h4 class="m_10">Kids</h4>
				            <li><a href="shop.php">Kids Shoes</a></li>
				            <li><a href="shop.php">Kids Clothing</a></li>
				            <li><a href="shop.php">Kids Accessories</a></li>
				         </ul>
				        <ul class="sub_list">
				            <h4 class="m_10">style</h4>
				            <li><a href="shop.php">Porsche Design Sport</a></li>
				            <li><a href="shop.php">Porsche Design Shoes</a></li>
				            <li><a href="shop.php">Porsche Design Clothing</a></li>
				        </ul>
				        <ul class="sub_list">
				            <h4 class="m_10">Adidas Neo Label</h4>
				            <li><a href="shop.php">Adidas NEO Shoes</a></li>
				            <li><a href="shop.php">Adidas NEO Clothing</a></li>
				        </ul>
				        <ul class="sub_list1">
				            <h4 class="m_10">Customise</h4>
				            <li><a href="shop.php">mi adidas</a></li>
				            <li><a href="shop.php">mi team</a></li>
				            <li><a href="shop.php">new arrivals</a></li>
				        </ul>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<h3 class="m_9">Sports</h3>
					<ul class="list1">
					    <li><a href="shop.php">Basketball</a></li>
			            <li><a href="shop.php">Football</a></li>
			            <li><a href="shop.php">Football Boots</a></li>
			            <li><a href="shop.php">Predator</a></li>
			            <li><a href="shop.php">F50</a></li>
			            <li><a href="shop.php">Football Clothing</a></li>
			            <li><a href="shop.php">Golf</a></li>
			            <li><a href="shop.php">Golf Shoes</a></li>
			            <li><a href="shop.php">Golf Clothing</a></li>
			            <li><a href="shop.php">Outdoor</a></li>
			            <li><a href="shop.php">Outdoor Shoes</a></li>
			            <li><a href="shop.php">Outdoor Clothing</a></li>
			            <li><a href="shop.php">Rugby</a></li>
			            <li><a href="shop.php">Running</a></li>
			            <li><a href="shop.php">Running Shoes</a></li>
			            <li><a href="shop.php">Boost</a></li>
			            <li><a href="shop.php">Supernova</a></li>
			            <li><a href="shop.php">Running Clothing</a></li>
			            <li><a href="shop.php">Swimming</a></li>
			            <li><a href="shop.php">Tennis</a></li>
			            <li><a href="shop.php">Tennis Shoes</a></li>
			            <li><a href="shop.php">Tennis Clothing</a></li>
			            <li><a href="shop.php">Training</a></li>
			            <li><a href="shop.php">Training Shoes</a></li>
			            <li><a href="shop.php">Training Clothing</a></li>
			            <li><a href="shop.php">Training Accessories</a></li>
			            <li><a href="shop.php">miCoach</a></li>
			            <li><a href="shop.php">All Sports</a></li>
			         </ul>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<h3 class="m_9">Originals</h3>
					<ul class="list1">
					    <li><a href="shop.php">Originals Shoes</a></li>
			            <li><a href="shop.php">Gazelle</a></li>
			            <li><a href="shop.php">Samba</a></li>
			            <li><a href="shop.php">LA Trainer</a></li>
			            <li><a href="shop.php">Superstar</a></li>
			            <li><a href="shop.php">SL</a></li>
			            <li><a href="shop.php">ZX</a></li>
			            <li><a href="shop.php">Campus</a></li>
			            <li><a href="shop.php">Spezial</a></li>
			            <li><a href="shop.php">Dragon</a></li>
			            <li><a href="shop.php">Originals Clothing</a></li>
			            <li><a href="shop.php">Firebird</a></li>
			            <li><a href="shop.php">Originals Accessories</a></li>
			            <li><a href="shop.php">Men's Originals</a></li>
			            <li><a href="shop.php">Women's Originals</a></li>
			            <li><a href="shop.php">Kid's Originals</a></li>
			            <li><a href="shop.php">All Originals</a></li>
		            </ul>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<h3 class="m_9">Product Types</h3>
					<ul class="list1">
					    <li><a href="shop.php">Shirts</a></li>
					    <li><a href="shop.php">Pants & Tights</a></li>
					    <li><a href="shop.php">Shirts</a></li>
					    <li><a href="shop.php">Jerseys</a></li>
					    <li><a href="shop.php">Hoodies & Track Tops</a></li>
					    <li><a href="shop.php">Bags</a></li>
					    <li><a href="shop.php">Jackets</a></li>
					    <li><a href="shop.php">Hi Tops</a></li>
					    <li><a href="shop.php">SweatShirts</a></li>
					    <li><a href="shop.php">Socks</a></li>
					    <li><a href="shop.php">Swimwear</a></li>
					    <li><a href="shop.php">Tracksuits</a></li>
					    <li><a href="shop.php">Hats</a></li>
					    <li><a href="shop.php">Football Boots</a></li>
					    <li><a href="shop.php">Other Accessories</a></li>
					    <li><a href="shop.php">Sandals & Flip Flops</a></li>
					    <li><a href="shop.php">Skirts & Dresseses</a></li>
					    <li><a href="shop.php">Balls</a></li>
					    <li><a href="shop.php">Watches</a></li>
					    <li><a href="shop.php">Fitness Equipment</a></li>
					    <li><a href="shop.php">Eyewear</a></li>
					    <li><a href="shop.php">Gloves</a></li>
					    <li><a href="shop.php">Sports Bras</a></li>
					    <li><a href="shop.php">Scarves</a></li>
					    <li><a href="shop.php">Shinguards</a></li>
					    <li><a href="shop.php">Underwear</a></li>
		            </ul>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<h3 class="m_9">Support</h3>
					<ul class="list1">
					   <li><a href="shop.php">Store finder</a></li>
					   <li><a href="shop.php">Customer Service</a></li>
					   <li><a href="shop.php">FAQ</a></li>
					   <li><a href="shop.php">Online Shop Contact Us</a></li>
					   <li><a href="shop.php">about adidas Products</a></li>
					   <li><a href="shop.php">Size Charts </a></li>
					   <li><a href="shop.php">Ordering </a></li>
					   <li><a href="shop.php">Payment </a></li>
					   <li><a href="shop.php">Shipping </a></li>
					   <li><a href="shop.php">Returning</a></li>
					   <li><a href="shop.php">Using out Site</a></li>
					   <li><a href="shop.php">Delivery Terms</a></li>
					   <li><a href="shop.php">Site Map</a></li>
					   <li><a href="shop.php">Gift Card</a></li>
					  
		            </ul>
		            <ul class="sub_list2">
		               <h4 class="m_10">Company Info</h4>
			           <li><a href="shop.php">About Us</a></li>
			           <li><a href="shop.php">Careers</a></li>
			           <li><a href="shop.php">Press</a></li>
			        </ul>
				</div>
				<div class="clear"></div>
			</div>
       	 	</div>
       	 </div>
       	 <div class="copy">
       	   <div class="wrap">
       	   	  <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
       	   </div>
       	 </div>
       </div>
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>
