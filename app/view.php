<?php
session_start();
$_SESSION['ctid'];
require 'dc.php';
$test=mysqli_query($con,"select * from friend_tb where friends_id = '$_SESSION[ctid]' and emails = '$_SESSION[email]' ");
while ($s=mysqli_fetch_array($test)) {
	$ids =$s['client_id'];
	$_SESSION['lem']=$s['email'];
}
$result = mysqli_query($con, "select * from view_tb where client_id ='$ids' or client_id='$_SESSION[ctid]'");
$data=mysqli_fetch_all($result, MYSQLI_ASSOC);
$da=json_encode($data);
echo $da;

?>