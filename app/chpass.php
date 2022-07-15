<?php session_start();
require "dc.php";
$id =$_SESSION['ctid'];
$pwd =md5($_POST['password']);
$edit=mysqli_query($con, "select * from clients_tb where client_id='$id'");
while ($sqi=mysqli_fetch_array($edit)) {
 $tes=$sqi['password'];
}

if ($pwd==$tes) {
 $msn= "Successful";
  echo $msn;
}
else{
  $msg= "Wrong Password, re-check ";
   echo $msg;

}




?>