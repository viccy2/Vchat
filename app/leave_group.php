<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
 	$_SESSION['ctid'];
    $_SESSION['group_mainid'];
    $_SESSION['group_mainname'];
    $_SESSION['group_admin_id'];

 $t = mysqli_query($con,"select * from groupmember_tb where group_name='$_SESSION[group_mainname]' and group_id='$_SESSION[group_mainid]'");
 while ($k = mysqli_fetch_array($t)) {
   	 $admin=$k['admin_id'];
   }  
   if ($admin==$_SESSION['ctid']) {
   	$se = mysqli_query($con, "delete from groupmember_tb where (admin_id='$admin') and (group_name='$_SESSION[group_mainname]') and (group_id='$_SESSION[group_mainid]')");
   	echo "group deleted successfully";
 
   } 	
   else {
   	$s = mysqli_query($con, "delete from groupmember_tb where (member_id='$_SESSION[ctid]') and (group_name='$_SESSION[group_mainname]') and (group_id='$_SESSION[group_mainid]')");
 if ($s) {
   echo"you're no longer a member";
 } 
   }
   
 
 

?>




  <?php
}
else{
  header("location:login.php");
}
?>