<?php session_start();
require 'dc.php';
$id =$_SESSION['ctid'];
$time = time();
$image_name = $_FILES["fileToUpload"]["name"];
$image_type = $_FILES["fileToUpload"]["type"];
$tmp_name =  $_FILES["fileToUpload"]["tmp_name"];
$image_explode = explode('.', $image_name);
$image_ext = end($image_explode);
$extensions = ['png', 'jpeg', 'jpg'];
$new_image =  $time.$image_name;
$fileSize=$_FILES['fileToUpload']['size'];


 $edit = mysqli_query($con, "update clients_tb set wallpaper ='profile_pics/$new_image' where client_id= '$id' and validation_code=0 and active=1");
	if ($edit) {
         move_uploaded_file($tmp_name,"profile_pics/".$new_image);
		$ten=mysqli_query($con, "select * from clients_tb  where client_id= '$id' and validation_code=0 and active=1");
		$tens=mysqli_fetch_array($ten);
		$wall=$tens['wallpaper'];
		$_SESSION['walpss']=$wall;
		$as="Wallpaper changed successfully";
		echo $as;
	}
 



// echo mysqli_error($con);
?>