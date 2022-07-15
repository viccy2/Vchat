<?php
session_start();
require 'dc.php';
$chatid = $_POST['id'];
$_SESSION['email'];
$_SESSION['username'];
$_SESSION['ctid'];
$_SESSION['pass'];
$_SESSION['user_id'];
$_SESSION['guser_id'];
$validate= uniqid(mt_rand(1));

$set=mysqli_query( $con, "select * from clients_tb where client_id= '$chatid'");
while ($ten=mysqli_fetch_array($set)) {
	$username=$ten['username'];
	$email=$ten['email'];
	$passport=$ten['passport'];
	$code=$ten['validation_code'];
	$t_id=$ten['client_id'];
	$account_types=$ten['account_type'];
	$guser_id=$ten['user_id'];
}
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");

$test=mysqli_query($con,"select * from friend_tb where friends_id = '$_SESSION[ctid]' and emails = '$_SESSION[email]' ");
while ($s=mysqli_fetch_array($test)) {
	$_SESSION['ids']=$s['client_id'];
	$_SESSION['lem']=$s['email'];
}
      //fix here
if ($_SESSION['ids']==$chatid and $_SESSION['lem']==$email) {
	 $del = mysqli_query($con,"DELETE FROM `request_tb` WHERE friends_id ='$_SESSION[ctid]' and client_id='$chatid' ");
	 $ms="Already a Friend";	
	echo $ms;
}
else{
  $lets = mysqli_query($con, "insert into friend_tb(client_id,friends_id,username,email,passport,validation_code,date,time,emails,request,sender,reciever,friends_username,friends_pic,account_type,message_id,user_id,mode_status)values('$chatid','$_SESSION[ctid]', '$username','$email','$passport','$code','$date','$time','$_SESSION[email]','request sent','$chatid','$_SESSION[ctid]','$_SESSION[username]','$_SESSION[pass]','$account_types','$validate','$guser_id','online')");

if ($lets) {
	$folder = mkdir('messages',0755);
  	$pagename = $validate.".php";
  	$newFileName = './messages/'.$validate.".php";
  	$arr_data=array();
  	$return_arr =  [
    "sender_id"   => "meid",
    "reciever_id" => "friendid",
    "names"        =>"u",
    "message"     =>"text"

  ];
   $fp = fopen($newFileName, 'a');
    array_push($arr_data,$return_arr);
    fwrite($fp, json_encode($arr_data, JSON_PRETTY_PRINT));
      fclose($fp); 
	 $lets = mysqli_query($con, " insert into friend_tb(client_id,friends_id,username,email,passport,validation_code,date,time,emails,request,sender,reciever,friends_username,friends_pic,account_type,message_id,user_id,mode_status)values('$_SESSION[ctid]','$chatid', '$_SESSION[username]','$_SESSION[email]','$_SESSION[pass]','$_SESSION[user_id]','$date','$time','$email','request recieved','$chatid','$_SESSION[ctid]','$username','$passport','$_SESSION[account_type]','$validate','$_SESSION[guser_id]','online')");
	  $kid = mysqli_query($con, " update clients_tb set  emails ='$_SESSION[email]' where email ='$email' ");
	 $del = mysqli_query($con,"DELETE FROM `request_tb` WHERE friends_id ='$_SESSION[ctid]' and client_id='$chatid' ");
	 $dels = mysqli_query($con,"DELETE FROM `notification_tb` WHERE reciever ='$_SESSION[ctid]' and sender='$chatid'  ");
	  $d = mysqli_query($con,"select * from friend_tb where emails ='$_SESSION[email]' and friends_id='$_SESSION[ctid]' ");
  $_SESSION['number_friends']=mysqli_num_rows($d);  
   $e = mysqli_query($con,"select * from request_tb where friends_id = '$_SESSION[ctid]' ");
  $_SESSION['number_request']=mysqli_num_rows($e);
  	$msn="Request accepted";	
	echo $msn;
}
else{
	echo mysqli_error($con);
}
}
 




?>
