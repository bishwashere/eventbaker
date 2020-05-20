<?php
session_start();
if(isset($_SESSION['item_id']))
  unset($_SESSION['item_id']);
header('location:wishlist.php');
?> 
