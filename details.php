<?php session_start();?>
<?php include('header.php');?>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d/%M/%Y"
			
		});
	};
</script>

       <?php include('sidebar.php')?>
     
		<div class="cont span_2_of_3">
			  <div class="labout span_1_of_a1">
				
			</div>
			<div class="cont1 span_2_of_a1">

<?php 
require('connect.php');
$name=$_GET['id'];
$_SESSION['id']=$name;
$result = mysqli_query($con,"SELECT * FROM gallery where item_id=$name");
while($row = mysqli_fetch_array($result))
  {
	$_SESSION['name']=$row['itemname'];
	$_SESSION['rent']=$row['rent'];
echo "<h3 class='m_3'>".$row['itemname']."</h3>";
echo "<img src='".$row['imgpath']."' style='height:250px;width:100%'>

				
				<div class='price_single'>
							  <span class='reducedfrom'>$".$row['rent']."</span>
							  <span class='actual'>".$row['offer']."% off</span><a href='#'>book soon for offer</a>
							</div>
				<div class='btn_form'>
				   <form class='right-form' action='check_available.php' method='post'>
					<input type='hidden' value='$name' name='ad'>
					<input type='text' placeholder='date' name='date' id='inputField' style='display:inline-block;height:35px;'>
					 <input type='submit' value='CHECK AVAILABILITY!' title=''>
				  </form>
<br>
				</div>
			
     	<h3 class='m_3'>features</h3> 
<ol>
<li><p class='m_desc'>".$row['feature1']."</p></li>
<li><p class='m_desc'>".$row['feature2']."</p></li>
<li><p class='m_desc'>".$row['feature3']."</p></li>
<li><p class='m_desc'>".$row['feature4']."</p></li>
<li><p class='m_desc'>".$row['feature5']."</p></li>
</ol>";
}
?> 			
                <div class='social_single'>	
				   <ul>	
					  <li class='fb'><a href='#'><span> </span></a></li>
					  <li class='tw'><a href='#'><span> </span></a></li>
					  <li class='g_plus'><a href='#'><span> </span></a></li>
					  <li class='rss'><a href='#'><span> </span></a></li>		
				   </ul>
			    </div>
			</div>
<div id="right-bar" style="float:right;width:300px;
height:600px;
background-color:white;
box-shadow: 10px 10px 5px #888888;position:relative;left:2%;"><br>
<div style="width:100%;height:450px;overflow:scroll">
<style> 
@font-face
{
font-family: myFirstFont;
src: url('Sansation_Light.ttf')
    ,url('Sansation_Light.eot'); /* IE9 */
}

.listing
{
font-family:myFirstFont;
}
</style>
<ul class="listing">
<?php $result = mysqli_query($con,"SELECT * FROM comment");
while($row = mysqli_fetch_array($result))
  {
echo "<li><p class='m_desc'><i>".$row[name]." says:</i><br>\"".$row[comments]."\"</p><hr></li>";
}
?>

<li><p class='m_desc'><i>maria D says:</i><br>"hello all this is a comment line about this enterprise and she said it is a good enterprise and it serves good"</p><hr></li>
<li><p class='m_desc'><i>maria D says:</i><br>"hello all this is a comment line about this enterprise and she said it is a good enterprise and it serves good"</p><hr></li>
<li><p class='m_desc'><i>maria D says:</i><br>"hello all this is a comment line about this enterprise and she said it is a good enterprise and it serves good"</p><hr></li>
<li><p class='m_desc'><i>maria D says:</i><br>"hello all this is a comment line about this enterprise and she said it is a good enterprise and it serves good"</p><hr></li>
<li><p class='m_desc'><i>maria D says:</i><br>"hello all this is a comment line about this enterprise and she said it is a good enterprise and it serves good"</p><hr></li>
</ul>
</div>
<?php if(isset($_SESSION['email'])){
echo
"<form method='post' action='comment.php'>
<textarea name='comments' style='width:98%;height:80px'></textarea>
<input type='submit' value='post' style='float:right'>
</form>";}
else{
	$_SESSION['back_page']=$_SERVER['PHP_SELF'];
	echo"<br><br><center><p class='listing'>please <a href='login.php'>login</a> to comment</p></center>";}

?>

</div>

			<div class="clear"></div>
     
     
         <ul id="flexiselDemo3">

<?php
$result = mysqli_query($con,"SELECT * FROM gallery");
while($row = mysqli_fetch_array($result))
  {
echo "<li><img src='".$row['imgpath']."' /><div class='grid-flex'><a href='details.php?id=".$row['item_id']."'>". $row['itemname'] . "</a><p>Rs ". $row['rent'] . "</p></div></li>";
}
?>
			
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

<?php 


$result = mysqli_query($con,"SELECT * FROM gallery WHERE item_id='$name' ");
while($row = mysqli_fetch_array($result))
  {



 ?>



     	<p class="m_text"><?php echo $row['description'];  ?></p>
     </div>					
	 <div class="toogle">
     	<h3 class="m_3">Product Reviews</h3>
     	<p class="m_text"><?php echo $row['review']; } ?></p>
     </div>
     </div>
     <div class="clear"></div>
	 </div>
     </div>
	 <?php include('footer.php');?>
