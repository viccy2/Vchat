<?php
session_start();
require 'dc.php';
$id =$_SESSION['ctid'];
$pwd = $_POST['password'];
$pw = $_POST['passwor'];
 
if (empty($pwd and $pw)) {
	$msg="inputs cannot be empty";
	echo $msg;
} 
elseif ($pwd!==$pw) {
	$msgs="password don't match";
	echo $msgs;
} 
elseif ($pwd==$pw) {
   $pwds = md5($_POST['password']);
   	$edit = mysqli_query($con, "update clients_tb set password ='$pwds' where client_id= '$id' and validation_code=0 and active=1");
   	if ($edit) {
   		$msn= "Password Reset Successfully";
   		echo $msn;
   	} 
}




// elseif ($pwd=$pw) {
// 	$msgs="password don't match recheck";
// 	echo $mgs;
// }





// else {
// 	if ($pwd!==$pw) {
// 	 $msg="Password don't match, please re-check";
//     echo $msg;
// }
// else{
// 	$edit = mysqli_query($con, "update clients_tb set password ='$pwd' where client_id= '$id' and validation_code=0 and active=1");
//   if ($edit) {
//   	$mst="Pasword Changed successfully";
//  	echo $mst;
// }
// }
	


// }


?>