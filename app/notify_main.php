<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
  $chat_id = $_GET['id'];
 	$_SESSION['ctid'];


    $test = mysqli_query($con,"update notification_tb set status='seen' where reciever='$_SESSION[ctid]' and sender='$chat_id'");
    $c = mysqli_query($con,"select * from notification_tb where status='unseen' and reciever='$_SESSION[ctid]'");
    $_SESSION['number']=mysqli_num_rows($c);  
    if ($test) {
    header("Location:friend_request");
    }
    
 
     
    

 	
   
   
 
 

?>




  <?php
}
else{
  header("location:sign_in");
}
?>