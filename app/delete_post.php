<?php session_start();
require 'dc.php';
$id =$_SESSION['ctid'];
$pid = $_POST['id'];

$se = mysqli_query($con, "delete from view_tb where (client_id='$id') and (view_id='$pid') ");

if ($se) {
	$msg = "post deleted";
	echo $msg;
}

else{
	$msn = "error occur";
	echo $msn;
}










?>