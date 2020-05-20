<?php require('connect.php')?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Forms -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			
		});
	};
</script>
    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="insert.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Item name</label>
                                            <input class="form-control" name="name">
                                            <p class="help-block">The name of the brand</p>
                                        </div>
					<div class="form-group">
                                            <label>class</label>
                                            <select class="form-control" name="class">
                                                <option>Business class</option>
                                                <option>Star</option>
                                                <option>Three star</option>
                                                <option>Five star</option>
                                                <option>Ordinary</option>
						<option>Luxury</option>
                                            </select>
                                            <p class="help-block">what class they belong to?</p>
                                        </div>

					<div class="form-group">
                                            <label>city</label>
                                            <input class="form-control" name="city">
                                            <p class="help-block">city of the item</p>
                                        </div>
										
					<div class="form-group">
                                            <label>country</label>
                                            <input class="form-control" name="country">
                                            <p class="help-block">country of the item</p>
                                        </div>
					<div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" name="email" placeholder="clients email">

                                        </div>
					<div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" name="rent" placeholder="rent per day">
                                            <span class="input-group-addon">.00</span>
                                        </div>
					<div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" name="offer" placeholder="offer in percentage">
                                            <span class="input-group-addon">.00</span>
                                        </div>
 					<div class="form-group">
                                            <label>rating</label>
                                            <select name="rating" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        <div class="form-group">
                                            <label>category</label>
                                            <select name="category" class="form-control">
                                                <option>auditorium</option>
                                                <option>florist</option>
                                                <option>caterers</option>
                                                <option>travels</option>
                                                <option>party_maker</option>
						<option>beauty_spa</option>
						<option>packages</option>
                                            </select>
                                            <p class="help-block">what are they??</p>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="file">
                                            <p class="help-block">edited pic</p>
                                        </div>
					<div class="form-group">
                                            <label>feature 1</label>
                                            <input name="feature1" class="form-control">
                                            <p class="help-block">first feature</p>
                                        </div>
                                       <div class="form-group">
                                            <label>feature 2</label>
                                            <input name="feature2" class="form-control">
                                            <p class="help-block">second feature</p>
                                        </div>
                                       <div class="form-group">
                                            <label>feature 3</label>
                                            <input name="feature3" class="form-control">
                                            <p class="help-block">third feature</p>
                                        </div>
                                       <div class="form-group">
                                            <label>feature 4</label>
                                            <input name="feature4" class="form-control">
                                            <p class="help-block">fourth feature</p>
                                        </div>
                                       <div class="form-group">
                                            <label>feature 5</label>
                                            <input name="feature5" class="form-control">
                                            <p class="help-block">fifth feature</p>
                                        </div>
                                    <div class="form-group">
                                            <label>Reviews</label>
                                            <textarea class="form-control" name="review" rows="5"></textarea>
                                            <p class="help-block">a long review</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="5" name="description"></textarea>
                                            <p class="help-block">a long description</p>
                                        </div>
					<div class="form-group">
                                            <label>enabled</label>
                                            <select class="form-control" name="enabled">
                                                <option>yes</option>
                                                <option>no</option>
                                               
                                            </select>
                                            <p class="help-block">do you want to disable??</p>
                                        </div>
					<div class="form-group">
                                            <label>occassion</label>
                                            <input name="occassion" class="form-control">
                                            <p class="help-block">not necessary(for easy search)</p>
                                        </div>
                                        <button type="submit" value="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) --></div>
                                <div class="col-lg-6">
                                    <!--here we can insert anything related-->
                    </div>              
<div class="col-lg-6">
                                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> No.of enterprises listed
<?php $result = mysqli_query($con,"select count(*) FROM gallery");
while($row = mysqli_fetch_array($result))
{
?>
                                    <span class="pull-right text-muted small"><em><?php echo $row[0];}?> items</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> Auditoriums listed
<?php $result = mysqli_query($con,"select count(*) FROM gallery where category='auditorium'");
while($row = mysqli_fetch_array($result))
{
?>
                                    <span class="pull-right text-muted small"><em><?php echo $row[0];}?></em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> Caterers listed
<?php $result = mysqli_query($con,"select count(*) FROM gallery where category='caterers'");
while($row = mysqli_fetch_array($result))
{
?>
                                    <span class="pull-right text-muted small"><em><?php echo $row[0];}?></em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> Florists listed
<?php $result = mysqli_query($con,"select count(*) FROM gallery where category='florist'");
while($row = mysqli_fetch_array($result))
{
?>
                                    <span class="pull-right text-muted small"><em><?php echo $row[0];}?></em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                   <i class="fa fa-tasks fa-fw"></i> Beauty spa listed
<?php $result = mysqli_query($con,"select count(*) FROM gallery where category='beauty_spa'");
while($row = mysqli_fetch_array($result))
{
?>
                                    <span class="pull-right text-muted small"><em><?php echo $row[0];}?></em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                   <i class="fa fa-tasks fa-fw"></i> party makers listed
<?php $result = mysqli_query($con,"select count(*) FROM gallery where category='party_maker'");
while($row = mysqli_fetch_array($result))
{
?>
                                    <span class="pull-right text-muted small"><em><?php echo $row[0];}?></em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> Travels listed
<?php $result = mysqli_query($con,"select count(*) FROM gallery where category='travels'");
while($row = mysqli_fetch_array($result))
{
?>
                                    <span class="pull-right text-muted small"><em><?php echo $row[0];}?></em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                   <i class="fa fa-tasks fa-fw"></i> Total registered users
<?php $result = mysqli_query($con,"select count(*) FROM members");
while($row = mysqli_fetch_array($result))
{
?>
                                    <span class="pull-right text-muted small"><em><?php echo $row[0];}?></em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
<br/><hr><h1>add booking</h1>
			<form role="form" action="add_booking.php" method="post" > <?php // remove sandbox=1 for live transactions ?>
		<fieldset>    

    <div class="form-group">
    <input type="hidden" name="currency_code" value="USD" />
    <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" />
   </div>
    <div class="form-group">
        <label>Gallery id</label>
        <input class="form-control" type="text" name="product_id"  />
</div>   
        <div class="form-group">
        <label>Enterprise name</label>
        <input class="form-control"type="text" name="product_name"  /><!--edit like this-->
    </div>
    <div class="form-group">    
        <input class="form-control" type="hidden" name="product_quantity" value="1" />
    </div>
        <div class="form-group">
        <label>Rent</label>
        <input class="form-control" type="text" name="product_amount" />
        </div>
    <div class="form-group">
        <label>Payer First Name</label>
        <input type="text"class="form-control" name="payer_fname" placeholder="Firstname" />
    </div>
    <div class="form-group">
        <label>Payer Last Name</label>
        <input type="text"class="form-control" name="payer_lname" placeholder="Lastname" />
    </div>
<div class="form-group">    
        <label>Payer Address</label>
        <input type="text"class="form-control" name="payer_address" placeholder="Current address" />
    </div>
    <div class="form-group">
        <label>Payer City</label>
        <input type="text"class="form-control" name="payer_city" placeholder="your city" />
    </div>
    <div class="form-group">
        <label>Payer State</label>
        <input type="text"class="form-control" name="payer_state" placeholder="Your state" />
        </div>
    <div class="form-group">
        <label>Payer Zip</label>
        <input type="text"class="form-control" name="payer_zip" placeholder="zip/pincode" />
    </div>
    <div class="form-group">
        <label>Payer Country</label>
        <input type="text"class="form-control" name="payer_country" placeholder="country" />
     </div>
    <div class="form-group">
        <label>Payer Email</label>
        <input type="text"class="form-control" name="payer_email" placeholder="email id" />
    </div>
	<div class="form-group">
        <label>Payer phone</label>
        <input type="text"class="form-control" name="phone" placeholder="phone no:" />
    </div>
	<div class="form-group">
        <label>Booked date</label>
	<input type="text"class="form-control" placeholder="date" name="date" id="inputField">
    </div>
    <div class="form-group">

        <input type="submit"class="form-control" name="submit" value="Submit" />
    </div>
    
</fieldset>
    </form>
                    <!-- /.panel -->
                    </div>
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    
</div>
                    <!-- /.panel -->
                
</div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Forms -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Forms - Use for reference -->

</body>

</html>
