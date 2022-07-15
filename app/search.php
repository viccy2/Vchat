<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
	$_SESSION['email'];
	$_SESSION['ctid'];
	$s = $_POST['first'];
    $quest= mysqli_query($con,"select * from friend_tb where username like '%".$s."%' and emails ='$_SESSION[email]' and friends_id='$_SESSION[ctid]' ");
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