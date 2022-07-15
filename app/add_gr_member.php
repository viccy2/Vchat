<?php session_start();
require 'dc.php';
$s = $_POST['first'];
$_SESSION['ctid'];
$_SESSION['group_mainname'];
$_SESSION['group_mainid'];
	
    $quest= mysqli_query($con,"select * from friend_tb where friends_username like '%".$s."%' and client_id='$_SESSION[ctid]'");
    if ($quest) {
    	$data=mysqli_fetch_all($quest, MYSQLI_ASSOC);
		$da=json_encode($data);
		echo $da;
    }
	
?>
