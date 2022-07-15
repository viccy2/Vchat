<?php session_start();
require 'dc.php';
$_SESSION['username'];
$id =$_SESSION['ctid'];
date_default_timezone_set('Africa/Lagos');
$date=date('Y-m-d');
$time= date("h:i:sa");
$message=strtolower($_POST['message']);

 $edit = mysqli_query($con, "insert into view_tb (client_id,upload,username,date,time,message,user_pic)values('$_SESSION[ctid]','-','$_SESSION[username]','$date','$time','$message','$_SESSION[pass]')");
	if ($edit) {
     $ten=mysqli_query($con, "select * from clients_tb  where client_id= '$id' and validation_code=0 and active=1");
		$tens=mysqli_fetch_array($ten);
		$wall=$tens['wallpaper'];
		$_SESSION['dashboardss']=$wall;
		$y="Upload Successful";
		echo $y;
}