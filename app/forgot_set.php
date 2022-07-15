<?php
session_start();
require 'dc.php'; 
$email=$_POST['email'];
$username= $_POST['uname'];
$edit=mysqli_query($con, "select * from clients_tb where email='$email' and username='$username' ");
while($dos=mysqli_fetch_array($edit)){
		$validations=$dos['validation_code'];
		$actives=$dos['active'];
		
	}

	if ($validations!=0 and $active!=1) {
		$msgs="Your account has not been activated";
		echo "$msgs";
	}
	else{
$edit=mysqli_query($con, "select * from clients_tb where email='$email' and username='$username' and validation_code=0 ");
$log=true;
while ($wow=mysqli_fetch_array($edit)) {
		$id=$wow['client_id'];
		$_SESSION['user_forgot_id']=$id;
		$_SESSION['user_forgot_email']=strtolower($email);
		$log=false;
}
if ($log) {	
	$msg = "Wrong Email or Username";
	echo "$msg";
}

else{
	$msgt = "Successfull";
	echo "$msgt";
}
}

?>