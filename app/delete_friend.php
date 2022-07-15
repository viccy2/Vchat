<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
  $chat_id = $_POST['id'];
 	$_SESSION['ctid'];
  $_SESSION['group_mainid'];
  $_SESSION['group_mainname'];
  $_SESSION['group_admin_id'];
  $friendid =  $_SESSION['cid']; 
  $meid = $_SESSION['ctid'];
   $secs = mysqli_query($con,"select * from friend_tb where client_id='$meid' and friends_id= '$friendid'");
while ($y=mysqli_fetch_array($secs)) {
  $msg_id=$y['message_id'];
}
   	$se = mysqli_query($con, "delete from friend_tb where (friends_id='$chat_id') and (client_id='$_SESSION[ctid]') ");
    $se = mysqli_query($con, "delete from friend_tb where (friends_id='$_SESSION[ctid]') and (client_id='$chat_id') ");
     if ($se) {
      unlink('./messages/'.$msg_id.".php");
       $s="Friend deleted";
      echo $s;
     }
 
    $d = mysqli_query($con,"select * from friend_tb where emails ='$_SESSION[email]' and friends_id='$_SESSION[ctid]' ");
   $_SESSION['number_friends']=mysqli_num_rows($d);  
    

 	
   
   
 
 

?>




  <?php
}
else{
  header("location:sign_in");
}
?>