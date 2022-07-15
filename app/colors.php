<?php
session_start();
require 'dc.php';
$color=$_POST['colors'];
if (empty($color)) {
 $set = mysqli_query($con,"update clients_tb set header_background='$_SESSION[color]', body_background='white',color='$color' where email='$_SESSION[email]'");
	$msn="You did not make any change";
 	echo $msn;
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
}
else{
	$sets = mysqli_query($con,"update clients_tb set header_background='$color', body_background='white',color='$color' where email='$_SESSION[email]'");
	$test=mysqli_query($con,"select * from clients_tb where email='$_SESSION[email]'");
	while ($we=mysqli_fetch_array($test)) {
		$_SESSION['color']=$we['color'];
		$_SESSION['bgcolor']=$we['background'];
	}
	$mst="Theme changed successfully";
	echo $mst;
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
 }




?>