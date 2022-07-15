<?php
session_start();
require 'dc.php';
 $_SESSION['user_forgot_id'];
 $_SESSION['user_forgot_email'];
 $_SESSION['user_forgot_question'];
 $_SESSION['user_forgot_answer'];
 $answer=$_POST['answer'];
 if ($answer==$_SESSION['user_forgot_answer']) {
 	$ms="Successfull";
 	echo $ms;
 }
 else{
 	$msg="wrong information check your answer or try reset password via email";
 	echo $msg;
 	
 }
?>