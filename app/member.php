<?php
session_start();
require 'dc.php';
$name=$_POST['id'];
// echo $name;
$a = $_SESSION['group_mainname'];
$b = $_SESSION['group_mainid'];
$_SESSION['ctid'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$mem_id = [];
$quest =mysqli_query($con, "select * from groupmember_tb where group_name='$a' and group_id='$b' ");
	while ($test=mysqli_fetch_assoc($quest)) {
		$mem_id[]=$test['member_id'];
		
	
	}
	$quest1 = mysqli_query($con, "select * from groupmember_tb where group_name='$a' and group_id='$b' ");
	while ($tes=mysqli_fetch_assoc($quest1)) {
		$admins=$tes['admin_id'];
		$ke=$tes['memberid'];
		$group_picture = $tes['grouppic'];
		$group_name = $tes['group_name'];
	}
		$save= mysqli_query($con, "select * from clients_tb where client_id='$name'");
		while ($t=mysqli_fetch_array($save)) {
	$_SESSION['member_name']=$t['username'];
	$_SESSION['member_pic']=$t['passport'];
	$_SESSION['member_id']=$t['client_id'];
	$_SESSION['member_contact']=$t['phone'];
	$_SESSION['member_email']=$t['email'];

 		
	}
	// print_r($mem_id);
	if (in_array($name, $mem_id)) {
		$ms="Already a member";
		echo $ms;
	} else {
	
	 		 $let=mysqli_query($con, "insert into groupmember_tb (admin_id,memcontact,mememail,group_name,grouppic,memberpic,date,time,color,group_id,member_id,username) values ('$admins','$_SESSION[member_contact]','$_SESSION[member_email]','$group_name','$group_picture','$_SESSION[member_pic]','$date','$time','#0a4981','$b','$_SESSION[member_id]','$_SESSION[member_name]')");
   			// move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
	
	 	$m="member added successfully";
   		echo $m;
	
   		
}
	





?>