<?php
session_start();
require 'dc.php';
$color=$_POST['color'];
$set = mysqli_query($con,"update clients_tb set header_background='$color', color='$color',body_background='white' where email='$_SESSION[email]'");
if ($set) {
	$app=mysqli_query($con, "select * from clients_tb where email='$_SESSION[email]'");
		while ($wow=mysqli_fetch_array($app)) {
		  	$_SESSION['email'] = $wow['email'];
		  	$_SESSION['username'] = $wow['username'];
		  	$_SESSION['ctid'] = $wow['client_id'];
		  	$_SESSION['pass'] = $wow['passport'];
		  	$_SESSION['name'] = $wow['username'];
		  	$_SESSION['walpss']=$wow['wallpaper'];
		  	$_SESSION['color']=$wow['color'];
			$_SESSION['bodybgcolor']=$wow['body_background'];
			$_SESSION['headerbgcolor']=$wow['header_background'];
			$_SESSION['mode_status']=$wow['mode_status'];
			$_SESSION['phones']=$wow['phone'];
			$_SESSION['user_id']=$wow['validation_code'];
			$_SESSION['account_type']=$wow['account_type'];
			$_SESSION['post_color']=$wow['post_color'];
	     }
	
	$msg = "Default theme restored successfully";
	echo $msg;
}
// else{
// 	echo mysqli_error($con);
// }

?>