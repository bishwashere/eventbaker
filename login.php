<?php include('header.php')?>
       <div class="login">
          <div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">New Customers <?php echo"from ".$_SESSION['backlink'];?> </h4>
					<h5 class="sub_title">Register Account</h5>
					<p>Are you new to ceremonie?Don't you have a account at ceremonie?create one now..!!IT'S FREEEE</p>
					<div class="button1">
					   <a href="register.php"><input type="submit" name="Submit" value="Continue"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				  <div class="login-title">
	           		<h4 class="title">Registered Customers</h4>
					 <div class="comments-area">
<?php if(isset($_GET['message'])){ echo "<h2>" .$_GET['message']. "</h2>"; } ?>
						<form method=post action="login_validate.php">
							
							<p>
								<label>Name</label>
								<span>*</span>
					<input type="text"  placeholder="email" name="login_email" id="login_email" required/>
							</p>
							<p>
								<label>Password</label>
								<span>*</span>
				<input type="password"  placeholder="Password" name="login_password" id="login_password" required/>
							</p>
							 <p id="login-form-remember">
								<label><a href="#">Forget Your Password ? </a></label>
							 </p>
							 <p>
							<input type="submit" style="float:right" onclick="myFunction()" value="Login" >
							</p>
						</form>
					</div>
			      </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
       <?php include('footer.php')?>
