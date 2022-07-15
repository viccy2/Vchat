<?php
/**
 * Request has Base64 Data
 * -----------------------
 * $_POST['audio'] is the Base64 encoded value of audio (WAV/MP3)
 */
// if(isset($_POST['audio'])){
//   $audio = base64_decode($_POST['audio']);
  
//   echo $audio;
// }

/**
 * Request has BLOB Data
 * ---------------------
 */
require 'dc.php';
  $audio = file_get_contents($_FILES['file']['tmp_name']);
  $ass = base64_decode($audio);
  echo $ass;
  $save=mysqli_query($con,"insert into upload_tb(audio,user_id)values('$ass',2)");
  if ($save) {
 echo "string";
  }
  
  // echo "http://localhost/Vchat/audio/examples/play.php?id=$id";
?>
