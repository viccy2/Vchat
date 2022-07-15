<?php session_start();
require 'dc.php';
// session_destroy();
$st=mysqli_query($con,"update clients_tb set mode_status='offline' where email='$_SESSION[email]'");
$editys=mysqli_query($con, "update friend_tb set mode_status='offline' where client_id = '$_SESSION[ctid] '");  
session_unset();
 if (isset($_COOKIE['email'])) {
 	unset($_COOKIE['email']);
 	setcookie('email','', time()-86400);
 } 
 echo "Logout successfully";
 
 ?>