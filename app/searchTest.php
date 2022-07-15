<?php
session_start();
 require 'dc.php';
	$s = $_POST['first'];
	$email=[];
	$set = mysqli_query($con, "select * from clients_tb where client_id != '$_SESSION[ctid]' and active=1 ");
	while ($x=mysqli_fetch_assoc($set)) {
		$email[]=$x['email'];
	}
	
$id=[];
$emails=[];
$save = mysqli_query($con, "select * from friend_tb where email='$_SESSION[email]' and client_id='$_SESSION[ctid]'");
while ($y=mysqli_fetch_assoc($save)) {
	$id[]=$y['friends_id'];
	$emails[]=$y['emails'];
	}
	
	$email2=[];
	$k = mysqli_query($con,"select * from request_tb where email='$_SESSION[email]' and sender='$_SESSION[ctid]'");
	while ($z=mysqli_fetch_assoc($k)) {
		$email2[]=$z['emails'];
	}
// print_r($emails);
// print_r($email);
// $e=in_array($emails, $email);
// print_r($e);
	
		// print_r($emails);
		// print_r($email);
		// $values = implode(",", $emails);
		// echo $values;
		// $e=array_intersect($email2, $email);
		$test = mysqli_query($con, "SELECT * FROM `clients_tb` WHERE username like '%".$s."%'and `email`  NOT IN ('". implode("','", $emails)."') and `email` !='$_SESSION[email]' ");
		$data=mysqli_fetch_all($test, MYSQLI_ASSOC);
		$da=json_encode($data);
	 	echo $da;
	 

		
		
	
?>
 