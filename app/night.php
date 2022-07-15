<?php
session_start();
require 'dc.php';
$color=$_POST['color'];
if ($color=='black') {
$set = mysqli_query($con,"update clients_tb set color='#660099',body_background='#121212',header_background='#272727',post_color='#272727',mode_status='on' where email='$_SESSION[email]'");
	$test=mysqli_query($con,"select * from clients_tb where email='$_SESSION[email]'");
	while ($we=mysqli_fetch_array($test)) {
		$_SESSION['color']=$we['color'];
		$_SESSION['bodybgcolor']=$we['body_background'];
		$_SESSION['headerbgcolor']=$we['header_background'];
		$_SESSION['mode_status']=$we['mode_status'];
		$_SESSION['post_color']=$we['post_color'];
	}

echo "dark mode enabled";
} else {
	$set = mysqli_query($con,"update clients_tb set color='#673AB7',body_background='white',header_background='#673AB7',post_color='white',mode_status='off' where email='$_SESSION[email]'");
	$test=mysqli_query($con,"select * from clients_tb where email='$_SESSION[email]'");
	while ($we=mysqli_fetch_array($test)) {
		$_SESSION['color']=$we['color'];
		$_SESSION['bodybgcolor']=$we['body_background'];
		$_SESSION['headerbgcolor']=$we['header_background'];
		$_SESSION['mode_status']=$we['mode_status'];
		$_SESSION['post_color']=$we['post_color'];
	}
	echo "dark mode deactivated";
}

// $set = mysqli_query($con,"update clients_tb set color='rgba(40,40,40)',background='rgba(40,40,40)' where email='$_SESSION[email]'");
// if ($set) {
// 	echo "<script>alert('successful')</script>";
// 	$test=mysqli_query($con,"select * from clients_tb where email='$_SESSION[email]'");
// 	while ($we=mysqli_fetch_array($test)) {
// 		$_SESSION['color']=$we['color'];
// 		$_SESSION['bgcolor']=$we['background'];
// 	}
// 	header("location:settings");
// }
// else{
// 	echo mysqli_error($con);
// }

?>