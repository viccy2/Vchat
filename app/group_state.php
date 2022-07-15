<?php
session_start();
require 'dc.php';
if (isset($_SESSION['user_id'])|| isset($_COOKIE['email'])){ 
 require 'dc.php';
    $jeremiah = $_GET['gpn'];
    $j_id     = $_GET['gid'];
    $_SESSION['as']=$jeremiah;
    $_SESSION['bs']=$j_id;
    $_SESSION['ctid'];
  $set=mysqli_query( $con, "select * from groupmember_tb where mememail= '$_SESSION[email]' and group_name='$jeremiah' and group_id='$j_id'");
while ($ten=mysqli_fetch_array($set)) {
  $wet=$ten['grouppic'];
   $_SESSION['group_picture']=$ten['grouppic'];
   $_SESSION['group_mainname']=$ten['group_name'];
  $_SESSION['group_mainid']=$ten['group_id'];
  $_SESSION['group_admin_id']=$ten['admin_id'];
}
 if ($_SESSION['group_admin_id']==$_SESSION['ctid']) {
 	header("location:groupmembers_admin");
 } else {
 	header("location:groupmembers");
 }
 

?>




  <?php
}
else{
  header("location:sign_in");
}
?>