<?php
session_start();
require 'dc.php';
$id =$_SESSION['ctid']; 
$question=$_POST['forgot'];
$_SESSION['user_forgot_id'];
$_SESSION['user_forgot_email'];
if ($question=="security") {
	$save1=mysqli_query($con,"select * from clients_tb where email='$_SESSION[user_forgot_email]' and client_id='$_SESSION[user_forgot_id]'");
	while ($do=mysqli_fetch_array($save1)) {
		$_SESSION['user_forgot_question']=$do['question'];
		$_SESSION['user_forgot_answer']=$do['answer'];
	}
	if ($save1) {
		$mst = "Successful";
		echo "$mst";
		// header("location:reset_password2.php");
	}
}
else if($question=="code"){
		$validate= uniqid(mt_rand(1));
		$upd=mysqli_query($con,"update clients_tb set validation_code='$validate', active=0 where email='$_SESSION[user_forgot_email]' and client_id='$_SESSION[user_forgot_id]' ");
		// $subject="Activate Account";
  //       $msgrs="PLease click the link below to activate your account
  //       http://localhost/vchart/activate.php?email=$email&code=$validation_code";
  //       $header="From Vchart.com";
  //       send_mail($email,$subject,$msg,$headers);
		$msj = "Successfull";
		echo "$msj";
          // header("location:change_password2.php");
		
       
		
}




?>