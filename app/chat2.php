<?php session_start();
require 'dc.php';
$_SESSION['username'];
$id =$_SESSION['ctid'];
$target_dir = "posts/";
date_default_timezone_set('Africa/Lagos');
$date=date('Y-m-d');
$time= date("h:i:sa");
$meid=$_SESSION['ctid'];
$friendid=$_SESSION['cid']; 
$random= uniqid(mt_rand(1));
  // Count total files
 $countfiles = count($_FILES['file']['name']);
 for($i=0;$i<$countfiles;$i++){
 

 if ($countfiles > 1) {

   
  $filenames = $_FILES['file']['name'][$i];
  $filesize = $_FILES['file']['size'][$i];
  $validextensions = array("jpeg", "jpg", "png","mp4","3gp"); //Extensions which are allowed
  $ext = explode('.', basename($_FILES['file']['name'][$i])); //explode file name from dot(.) 
  $file_extension = end($ext); //store extensions in the variable
  $target_file = strtolower($target_dir . basename($_FILES['file']['name'][$i]));
  if (($_FILES["file"]["size"][$i] < 10000000) //Approx. 1mb files can be uploaded.
            && in_array($file_extension, $validextensions)) {
     move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file);
    // move_uploaded_file($_FILES['file']['tmp_name'][$i],'posts/'.$filename);
    $edit = mysqli_query($con, "insert into messages_tb (identifier_message_number,message,fromgs,date,time,name,random,more)values('$friendid','$target_file','$meid','$date','$time','$_SESSION[username]','$random','yes')");
   $a= "Upload Successful";
    echo "Upload Successful";
  }
 
  
 
 
 }


 else{
 $filename=$_FILES['file']['name'][$i];
 $filesize=$_FILES['file']['size'][$i];
 $validextensions = array("jpeg", "jpg", "png");
 $ext = explode('.', basename($_FILES['file']['name'][$i]));
 $file_extension = end($ext);
 $target_file = strtolower($target_dir . basename($_FILES['file']['name'][$i]));
  		
  if (($_FILES["file"]["size"][$i] < 1000000)&& in_array($file_extension, $validextensions)) {

  			move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file);
  			 $edits = mysqli_query($con, "insert into messages_tb (identifier_message_number,message,fromgs,date,time,name,random,more)values('$friendid','$target_file','$meid','$date','$time','$_SESSION[username]','$random','no')");

    			echo "Upload Successful";

  		    }





	 }

}



 
?>