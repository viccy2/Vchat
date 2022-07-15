<?php session_start();
require 'dc.php';
$_SESSION['ctid'];
	$s = $_POST['first'];
    $quest= mysqli_query($con,"select * from request_tb where username like '%".$s."%' and friends_id = '$_SESSION[ctid]' ");
    if ($quest) {
    	$data=mysqli_fetch_all($quest, MYSQLI_ASSOC);
		$da=json_encode($data);
		echo $da;
    }
	
?>
