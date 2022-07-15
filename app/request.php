<?php
session_start();
require 'dc.php';
$chatid = $_GET['id'];
$_SESSION['email'];
$_SESSION['username'];
$_SESSION['ctid'];
$_SESSION['pass'];
$_SESSION['user_id'];
echo $chatid;
$set=mysqli_query( $con, "select * from clients_tb where client_id= '$chatid'");
while ($ten=mysqli_fetch_array($set)) {
  $email=$ten['email'];
  $t_id=$ten['client_id'];
}
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$id=[];
$emails=[];
$save = mysqli_query($con, "select * from request_tb where email='$_SESSION[email]' and client_id='$_SESSION[ctid]'");
while ($y=mysqli_fetch_assoc($save)) {
	$new_id = $y['friends_id'];
	$new_email=$y['emails'];
	$id[]=$y['friends_id'];
	$emails[]=$y['emails'];
	}
// echo $email;
// print_r($emails);
if (in_array($email, $emails)) {
	header("location:groupmembers_admin");
	} 
else{
	
	  $lets = mysqli_query($con, "insert into request_tb(client_id,friends_id,username,email,passport,validation_code,date,time,emails,request,sender,reciever,account_type)values('$_SESSION[ctid]','$chatid', '$_SESSION[username]','$_SESSION[email]','$_SESSION[pass]','$_SESSION[user_id]','$date','$time','$email','request sent','$_SESSION[ctid]','$chatid','none')");
  	$note = mysqli_query($con,"insert into notification_tb(sender,reciever,message,date,time,status,sender_pic,sender_name)values('$_SESSION[ctid]','$chatid','you have a friend request',0,0,'unseen','$_SESSION[pass]',	'$_SESSION[username]')");
  		$c = mysqli_query($con,"select * from notification_tb where status='unseen' and reciever='$_SESSION[ctid]'");
        $_SESSION['number']=mysqli_num_rows($c); 

if ($lets) {
	header("location:groupmembers_admin");

}


}


 




?>
