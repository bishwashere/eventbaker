<?php
error_reporting('0');
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$con = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('celebrations');
/* Get total number of records */
$sql = "SELECT * from members";
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row = mysql_fetch_array($retval, MYSQL_NUM );
$name = $row[1];
require('connect.php');
$query="insert into comment(item_id,email,name,comments) values('$_SESSION[id]','$_SESSION[email]','$name','$_POST[comments]')";
//query ends here

if (!mysqli_query($con,$query))
  {
header("location:details.php?id=".$_SESSION['id']."");
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
header("location:details.php?id=".$_SESSION['id']."");
?>
