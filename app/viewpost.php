<?php
session_start();
require 'dc.php';
$name=$_POST['id'];

$save= mysqli_query($con, "select * from view_tb where view_id='$name'");
while ($t=mysqli_fetch_array($save)) {
	$_SESSION['view_post']=$t['upload'];
	

 		
	}









?>