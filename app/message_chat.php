<?php session_start();
require 'dc.php';
$friendid =  $_SESSION['cid']; 
$meid = $_SESSION['ctid'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$text=$_POST['text'];

$me=mysqli_query($con, "select * from clients_tb where client_id='$meid'");
while ($alrt=mysqli_fetch_array($me)) {
  $username=$alrt['username'];
}

$secs = mysqli_query($con,"select * from friend_tb where client_id='$meid' and friends_id= '$friendid'");
while ($y=mysqli_fetch_array($secs)) {
  $msg_id=$y['message_id'];
}

$message_id= $msg_id;

if ($text==" ") {

}
else{
 
   $myFile = './messages/'.$message_id.".php";
 
   $arr_data = array(); // create empty array

  try
  {
     //Get form data
     $formdata = array(
   "sender_id"   => $meid,
    "reciever_id" => $friendid,
    "names"        =>$username,
    "message"     =>$text,
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



  ?>