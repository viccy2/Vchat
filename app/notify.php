<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
    $quest= mysqli_query($con,"select * from notification_tb where reciever = '$_SESSION[ctid]' and status = 'unseen' ");
    $c = mysqli_query($con,"select * from notification_tb where status='unseen' and reciever='$_SESSION[ctid]'");
    $_SESSION['number_request']=mysqli_num_rows($c); 
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