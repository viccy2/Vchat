<?php session_start();
require 'dc.php';
$id =$_SESSION['ctid'];
$uname =$_POST['username'];
$state =$_POST['state'];
$country =$_POST['country'];
$about =$_POST['about'];
$target_dir = "profile_pics/";
$target_file = strtolower($target_dir . basename($_FILES["fileToUpload"]["name"]));
$time = time();
$image_name = $_FILES["fileToUpload"]["name"];
$image_type = $_FILES["fileToUpload"]["type"];
$tmp_name =  $_FILES["fileToUpload"]["tmp_name"];
$image_explode = explode('.', $image_name);
$image_ext = end($image_explode);
$extensions = ['png', 'jpeg', 'jpg'];
$new_image =  $time.$image_name;

if($target_file=="profile_pics/"){
	$edi = mysqli_query($con, "update clients_tb set username='$uname',state='$state',country='$country',about='$about',passport='$_SESSION[pass]' where client_id = '$id' and validation_code=0 and active=1");	
	$editys=mysqli_query($con, "update friend_tb set username='$uname',passport='$_SESSION[pass]' where client_id = '$id'");
	if ($edi and $editys) {
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
		$ten=mysqli_query($con, "select * from clients_tb where client_id = '$id' and validation_code=0 and active=1");
		$wow=mysqli_fetch_array($ten);
			$_SESSION['email'] = $wow['email'];
		  	$_SESSION['ctid'] = $wow['client_id'];
		  	$_SESSION['pass'] = $wow['passport'];
		  	$_SESSION['username'] = $wow['username'];
		  	$_SESSION['walpss']=$wow['wallpaper'];
		  	$_SESSION['about'] = $wow['about'];
		  	$_SESSION['state'] = $wow['state'];
		  	$_SESSION['country'] = $wow['country'];
		echo "Profile Updated Successfully";
	}
}

else{


	$edi = mysqli_query($con, "update clients_tb set username='$uname',state='$state',country='$country',about='$about',passport='profile_pics/$new_image' where client_id = '$id' and validation_code=0 and active=1");
	$editys=mysqli_query($con, "update friend_tb set username='$uname',passport='profile_pics/$new_image' where client_id = '$id'");
	$edityss=mysqli_query($con, "update view_tb set username='$uname' where client_id = '$id'");
	if ($edi and $editys) {
	 move_uploaded_file($tmp_name,"profile_pics/".$new_image);
		$ten=mysqli_query($con, "select * from clients_tb where client_id = '$id' and validation_code=0 and active=1");
		$wow=mysqli_fetch_array($ten);
			$_SESSION['email'] = $wow['email'];
		  	$_SESSION['ctid'] = $wow['client_id'];
		  	$_SESSION['pass'] = $wow['passport'];
		  	$_SESSION['username'] = $wow['username'];
		  	$_SESSION['walpss']=$wow['wallpaper'];
		  	$_SESSION['about'] = $wow['about'];
		  	$_SESSION['state'] = $wow['state'];
		  	$_SESSION['country'] = $wow['country'];
		echo "Profile Updated Successfully";
	}
   
}
	






?>