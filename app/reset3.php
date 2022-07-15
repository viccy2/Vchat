<?php
require 'dc.php';
session_start();
$pwd   = md5($_POST['pass']) ;
$pwds   = md5($_POST['password']);
$_SESSION['user_forgot_id'];
$_SESSION['user_forgot_email'];
if($pwd!=$pwds){
	$msgs="Password do not match";
	echo "$msgs";
}
else{
	$upd=mysqli_query($con,"update clients_tb set password='$pwds' where email='$_SESSION[user_forgot_email]' and client_id='$_SESSION[user_forgot_id]'and validation_code=0 and active=1");
	$mst="Password Reset Successfully";
	echo $mst;
}


?>