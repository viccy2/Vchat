<?php session_start();
require 'dc.php';
$friendid =  $_SESSION['cid']; 
$meid = $_SESSION['ctid'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$text=$_POST['text'];

$me=mysqli_query($con, "select * from clients_tb where client_id='$meid'");
while ($alrt=mysqli_fetch_array($me)) {
  $username=$alrt['username'];
}

$secs = mysqli_query($con,"select * from friend_tb where client_id='$meid' and friends_id= '$friendid'");
while ($y=mysqli_fetch_array($secs)) {
  $msg_id=$y['message_id'];
}

$message_id= $msg_id;





  ?>