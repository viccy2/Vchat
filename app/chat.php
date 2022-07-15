<?php
session_start();
require 'dc.php';
$email=$_SESSION['email'];
$file=$_SESSION['pass'];
$msg= $_POST['text'];
$_SESSION['group_mainname'];
$_SESSION['group_mainid'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$me=mysqli_query($con, "select * from groupmember_tb where mememail='$_SESSION[email]' and group_name='$_SESSION[group_mainname]' and group_id='$_SESSION[group_mainid]'");
while ($alrt=mysqli_fetch_array($me)) {
  $t=$alrt['memcontact'];
}

if ($msg=="") {
  # code...
}
else{
    $myFile = './messages/'.$_SESSION['group_mainid'].".php";
    $arr_data = array(); // create empty array

     try{
            //Get form data
     $formdata = array(
   "sender_id"   => $_SESSION['ctid'],
    "group_id"   =>   $_SESSION['group_mainid'],
    "names"       =>$_SESSION['username'],
    "message"     =>$msg,
    "time"        =>$time,
    "date"        =>$date
     );

     //Get data from existing json file
     $jsondata = file_get_contents($myFile);

     // converts json data into array
     $arr_data = json_decode($jsondata, true);

     // Push user data to array
     array_push($arr_data,$formdata);

       //Convert updated array to JSON
     $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents($myFile, $jsondata)) {
          echo 'Data successfully saved';
      }
     else 
          echo "error";

   }
   catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
   }




}

// if ($_POST['first'] !== "") {
//     $lets = mysqli_query($con, "insert into gmessages_tb(email,contact,message,date,username,group_name,time,passport,group_id)values('$email','$t','$msg','$date','$_SESSION[username]','$_SESSION[group_mainname]','$time','$file','$_SESSION[group_mainid]')");
//    if ($lets) {
//      $check = mysqli_query($con, "select * from gmessages_tb where group_name='$_SESSION[group_mainname]' and group_id='$_SESSION[group_mainid]' ");
   
//     $r=mysqli_fetch_all($check,MYSQLI_ASSOC);      	
//     $da=json_encode($r);
//     echo $da; 
// }
// }
// else{
//    $check = mysqli_query($con, "select * from gmessages_tb where group_name='$_SESSION[group_mainname]' and group_id='$_SESSION[group_mainid]'  ");
// 	 $r=mysqli_fetch_all($check,MYSQLI_ASSOC);    	
//     $da=json_encode($r);
//     echo $da; 
// }



