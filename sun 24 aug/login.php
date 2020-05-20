
<!DOCTYPE HTML>
<html>
<head>
<title>login page</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).php();
                $(".dropdown dt a span").php(text);
                $(".dropdown dd ul").hide();
                $("#result").php("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").php();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
  <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <div class="cssmenu">
		   <ul>
			 <li class="active"><a href="register.php">Sign up & Save</a></li> 
			 <li><a href="shop.php">Store Locator</a></li> 
			 <li><a href="login.php">My Account</a></li> 
			 <li><a href="checkout.php">CheckOut</a></li> 
		   </ul>
		</div>
		<ul class="icon2 sub-icon2 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon2 list">
					<li><h3>Products</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
		<div class="clear"></div>
 	</div>
   </div>
   <div class="header-bottom">
   	  <div class="wrap">
   		<!-- start header menu -->
		 <ul class="megamenu skyblue">
		    <li><a class="color1" href="#">Home</a></li>
			<li class="grid"><a class="color2" href="#">Men</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">men</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>style zone</h4>
								<ul>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<img src="images/nav_img.jpg" alt=""/>
					</div>
				</div>
				</li>
  			   <li class="active grid"><a class="color4" href="#">Women</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="shop.php">login</a></li>
									<li><a href="shop.php">create an account</a></li>
									<li><a href="shop.php">create wishlist</a></li>
									<li><a href="shop.php">my shopping bag</a></li>
									<li><a href="shop.php">brands</a></li>
									<li><a href="shop.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
						 <div class="h_nav">
						   <img src="images/nav_img1.jpg" alt=""/>
						 </div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
					</div>
    			</li>				
				<li><a class="color5" href="#">Kids</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">man</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>style zone</h4>
								<ul>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<img src="images/nav_img2.jpg" alt=""/>
					</div>
				</div>
				</li>
				<li><a class="color6" href="#">Sale</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">brands</a></li>
								</ul>	
							</div>	
							<div class="h_nav">
								<h4 class="top">my company</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>man</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="shop.php">login</a></li>
									<li><a href="shop.php">create an account</a></li>
									<li><a href="shop.php">create wishlist</a></li>
									<li><a href="shop.php">my shopping bag</a></li>
									<li><a href="shop.php">brands</a></li>
									<li><a href="shop.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
				</div>
				</li>
				<li><a class="color7" href="#">Customize</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="shop.php">login</a></li>
									<li><a href="shop.php">create an account</a></li>
									<li><a href="shop.php">create wishlist</a></li>
									<li><a href="shop.php">my shopping bag</a></li>
									<li><a href="shop.php">brands</a></li>
									<li><a href="shop.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color8" href="#">Shop</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>style zone</h4>
								<ul>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">man</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
				</div>
				</li>
				<li><a class="color9" href="#">Football</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="shop.php">login</a></li>
									<li><a href="shop.php">create an account</a></li>
									<li><a href="shop.php">create wishlist</a></li>
									<li><a href="shop.php">my shopping bag</a></li>
									<li><a href="shop.php">brands</a></li>
									<li><a href="shop.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.php">trends</a></li>
									<li><a href="shop.php">sale</a></li>
									<li><a href="shop.php">style videos</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.php">new arrivals</a></li>
									<li><a href="shop.php">men</a></li>
									<li><a href="shop.php">women</a></li>
									<li><a href="shop.php">accessories</a></li>
									<li><a href="shop.php">kids</a></li>
									<li><a href="shop.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color10" href="#">Running</a></li>
				<li><a class="color11" href="#">Originals</a></li>
				<li><a class="color12" href="#">Basketball</a></li>
		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>
       <div class="login">
          <div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">New Customers</h4>
					<h5 class="sub_title">Register Account</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
					<div class="button1">
					   <a href="register.php"><input type="submit" name="Submit" value="Continue"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				  <div class="login-title">
	           		<h4 class="title">Registered Customers</h4>
					 <div class="comments-area">
						<form>
							<p>
								<label>Name</label>
								<span>*</span>
								<input type="text" value="">
							</p>
							<p>
								<label>Password</label>
								<span>*</span>
								<input type="password" value="">
							</p>
							 <p id="login-form-remember">
								<label><a href="#">Forget Your Password ? </a></label>
							 </p>
							 <p>
								<input type="submit" value="Login">
							</p>
						</form>
					</div>
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
