<?php
session_start();
require 'dc.php';
$friend_id = $_POST['id'];
$_SESSION['ki']=$friend_id;
$_SESSION['email'];
$_SESSION['username'];
$_SESSION['ctid'];
$_SESSION['pass'];
$_SESSION['user_id'];
$set=mysqli_query( $con, "select * from clients_tb where client_id= '$friend_id'");
while ($ten=mysqli_fetch_array($set)) {
  $email=$ten['email'];
  $t_id=$ten['client_id'];
}
$id=[];
$emails=[];
$save = mysqli_query($con, "select * from friend_tb where email='$_SESSION[email]' and client_id='$_SESSION[ctid]'");
while ($y=mysqli_fetch_assoc($save)) {
	$new_id = $y['friends_id'];
	$new_email=$y['emails'];
	$id[]=$y['friends_id'];
	$emails[]=$y['emails'];
	}
// print_r($id);
// print_r($emails);


if (in_array($email, $emails)) {
	$ms="Already a Friend";	
	include 'groupmembers.php';
	} 
else{
	$id=$_SESSION['ki'];
	header("Location:request2?id=".$id);
}







?>