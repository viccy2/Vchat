<?php session_start();
require 'dc.php';
$_SESSION['ctid'];
$_SESSION['group_mainname'];
$_SESSION['group_mainid'];
	$s = $_POST['first'];
    $quest= mysqli_query($con,"select * from groupmember_tb where username like '%".$s."%' and group_name='$_SESSION[group_mainname]' and group_id = '$_SESSION[group_mainid]'and member_id!=$_SESSION[ctid]  ");
    if ($quest) {
    	$data=mysqli_fetch_all($quest, MYSQLI_ASSOC);
		$da=json_encode($data);
		echo $da;
    }
	
?>
