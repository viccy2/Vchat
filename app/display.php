<?php
session_start();
$_SESSION['ctid'];
require 'dc.php';
$result = mysqli_query($con, "select * from friend_tb where email='$_SESSION[email]' and client_id='$_SESSION[ctid]'");
$data=mysqli_fetch_all($result, MYSQLI_ASSOC);
$da=json_encode($data);
echo $da;

?>