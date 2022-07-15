<?php
session_start();
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
    $j_id= $_POST['id'];
    $_SESSION['ctid'];
    $_SESSION['group_mainid'];
    $_SESSION['group_mainname'];
    $_SESSION['group_admin_id'];
    // echo $j_id;
    // echo $_SESSION['group_mainname'];
 $s = mysqli_query($con, "delete from groupmember_tb where (member_id='$j_id') and (group_name='$_SESSION[group_mainname]') and (group_id='$_SESSION[group_mainid]')");
 if ($s) {
   echo "Member removed successfully";
 } else {
   echo "not successfully";
 }
 

?>




  <?php
}
else{
  header("location:sign_in");
}
?>