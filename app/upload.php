<?php session_start();
require 'dc.php';
$uname=$_SESSION['username'];
$user_pic = $_SESSION['pass'];
$message = $_POST['message'];
$id =$_SESSION['ctid'];
$target_dir = "posts/";
date_default_timezone_set('Africa/Lagos');
$date=date('Y-m-d');
$time= date("h:i:sa");

$filename=$_FILES['fileToUpload']['name'];
$filesize=$_FILES["fileToUpload"]["size"];
$filetype=$_FILES['fileToUpload']['type'];
$validextensions = array("image/jpeg", "image/jpg", "image/png");
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$times = time();
$image_name = $_FILES["fileToUpload"]["name"];
$image_type = $_FILES["fileToUpload"]["type"];
$tmp_name =  $_FILES["fileToUpload"]["tmp_name"];
$image_explode = explode('.', $image_name);
$image_ext = end($image_explode);
$extensions = ['png', 'jpeg', 'jpg'];
$new_image =  $times.$image_name;

 if (in_array($filetype, $validextensions)) {
 $querys = mysqli_query($con, "insert into view_tb (client_id,upload,username,date,time,message,user_pic)values('$id','posts/$new_image','$uname','$date','$time','$message','$user_pic')");
 $a =  move_uploaded_file($tmp_name,"posts/".$new_image);
 if ($a) {
  	$msn = "upload successfull";
	echo $msn;
  } 


 	
 
 }

else{
	$msg = "Unknown file upload";
	echo $msg;
}
  



?>