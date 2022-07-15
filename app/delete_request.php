<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
  $chat_id = $_POST['id'];
 	$_SESSION['ctid'];
    $_SESSION['group_mainid'];
    $_SESSION['group_mainname'];
    $_SESSION['group_admin_id'];
    $se = mysqli_query($con, "delete from request_tb where (friends_id='$_SESSION[ctid]') and (client_id='$chat_id') ");
       $del = mysqli_query($con,"DELETE FROM `notification_tb` WHERE reciever ='$_SESSION[ctid]' and sender='$chat_id'  ");
      if($del){
      	 $c = mysqli_query($con,"select * from notification_tb where status='unseen' and reciever='$_SESSION[ctid]'");
     $_SESSION['number']=mysqli_num_rows($c); 
      $e = mysqli_query($con,"select * from request_tb where friends_id = '$_SESSION[ctid]' ");
  $_SESSION['number_request']=mysqli_num_rows($e); 

         $sa="request deleted";
         echo $sa;
      }
    
     
 
     
    

 	
   
   
 
 

?>




  <?php
}
else{
  header("location:sign_in");
}
?>