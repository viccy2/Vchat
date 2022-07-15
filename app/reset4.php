<?php
require 'dc.php';
session_start();
$code=$_POST['code'];
$_SESSION['user_forgot_id'];
$_SESSION['user_forgot_email'];
$save1=mysqli_query($con,"select * from clients_tb where email='$_SESSION[user_forgot_email]' and client_id='$_SESSION[user_forgot_id]'");
	while ($do=mysqli_fetch_array($save1)) {
		$_SESSION['user_forgot_code']=$do['validation_code'];
		
	}
	if ($code==$_SESSION['user_forgot_code']){
		$upd=mysqli_query($con,"update clients_tb set validation_code=0 where email='$_SESSION[user_forgot_email]' and client_id='$_SESSION[user_forgot_id]' and active=1");
		$mst="Successfull";
		echo $mst;
	}
	else{
		$msg="Invalid security code, Try Security Question or Try again";
		echo $msg;
	}

?>