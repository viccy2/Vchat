<?php
session_start();
require 'dc.php';
 $_SESSION['group_mainname'];
 $id = $_POST['userid'];
// echo $id;
$save = mysqli_query($con,"select * from groupmember_tb where group_name='$_SESSION[group_mainname]' and member_id='$id' ");
// $response = "<table border='0' width='100%'>";
while ($a = mysqli_fetch_array($save)) {
	$new_id=$a['member_id'];
	$uname=$a['username'];

 	// $response .= "<tr>";
  //   $response .= "<td>Name : </td><td>".$uname."</td>";
  //   $response .= "</tr>";

   

}
// $response .= "</table>";

echo $uname .' '. 'will be removed from the group';
// exit;
?>
