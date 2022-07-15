<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
	$s = $_POST['first'];
    $quest= mysqli_query($con,"select * from groupmember_tb where group_name like '%".$s."%' and mememail = '$_SESSION[email]' and member_id = '$_SESSION[ctid]' ");
	$data=mysqli_fetch_all($quest, MYSQLI_ASSOC);

$da=json_encode($data);
echo $da;
?>
  <?php
}
else{
  header("location:sign_in");
}
?>