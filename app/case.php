<?php session_start();
require 'dc.php';
$_SESSION['ctid'];
$random1=[];
$random2=[];
$random3=[];
$u=[];
$us=[];
 // print_r($random1);
 $result2 = mysqli_query($con, "select * from view_tb where client_id='$_SESSION[ctid]'");
    $count = 1;
while ($p=mysqli_fetch_assoc($result2)) {
 	$random2[]=$p['random'];
 	$us[]=$p['upload'];
 	
 }
	 // print_r($random2);
	 // print_r($us);

  $result = mysqli_query($con, "select * from view_tb where client_id!='$_SESSION[ctid]'");
while ($s=mysqli_fetch_assoc($result)) {
 	$random1[]=$s['random'];
 	$u[]=$s['upload'];
 	
 }

 // print_r($random1);
 // // print_r($u);
 // print_r($u);

$test = mysqli_query($con, "SELECT * FROM `view_tb` WHERE mores='yes' and `random` IN ('". implode("','", $random2)."') ORDER BY date  ");
$tests = mysqli_query($con, "SELECT * FROM `view_tb` WHERE mores='yes' and `random` IN ('". implode("','", $random1)."') ORDER BY date  ");

$data=mysqli_fetch_all($test, MYSQLI_ASSOC);
		$da=json_encode($data);
	 	// echo 
	 	$datas=mysqli_fetch_all($tests, MYSQLI_ASSOC);
		$das=json_encode($datas);
	 	echo $das,$da;
 
                              
 ?>