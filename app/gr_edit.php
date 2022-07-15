<?php session_start();
require 'dc.php';
$pic=$_SESSION['group_picture'];
$uname = strtoupper($_POST['username']);
$target_dir = "profile_pics/";
$time = time();
$image_name = $_FILES["fileToUpload"]["name"];
$image_type = $_FILES["fileToUpload"]["type"];
$tmp_name =  $_FILES["fileToUpload"]["tmp_name"];
$image_explode = explode('.', $image_name);
$image_ext = end($image_explode);
$extensions = ['png', 'jpeg', 'jpg'];
$new_image =  $time.$image_name;
$target_file = strtolower($target_dir . basename($_FILES["fileToUpload"]["name"]));


if($target_file=="profile_pics/"){
	$edi = mysqli_query($con, "update groupmember_tb set group_name='$uname', grouppic='$pic' where  group_id = '$_SESSION[group_mainid]' and admin_id='$_SESSION[ctid]'");
	$editys=mysqli_query($con, "update gmessages_tb set group_name='$uname', passport='$pic' where admin_id = '$_SESSION[ctid]'");
		 $set=mysqli_query($con, "select * from groupmember_tb where group_id = '$_SESSION[group_mainid]'");
       while($wow=mysqli_fetch_array($set)){
            $_SESSION['group_name'] = $wow['group_name'];
            $_SESSION['group_picture'] = $wow['grouppic'];
            $_SESSION['group_color'] = $wow['color'];
}
        
         echo "Updated Successfully";
	
}

else{


	$edis = mysqli_query($con, "update groupmember_tb set group_name='$uname', grouppic='profile_pics/$new_image' where  group_id = '$_SESSION[group_mainid]' and admin_id=$_SESSION[ctid]");
	$edityss= mysqli_query($con, "update gmessages_tb set group_name='$uname',passport='profile_pics/$new_image' where admin_id = '$_SESSION[ctid]'");
		 move_uploaded_file($tmp_name,"profile_pics/".$new_image);
		 $set=mysqli_query($con, "select * from groupmember_tb where group_id = '$_SESSION[group_mainid]'");
        while ($wow=mysqli_fetch_array($set)) {
            $_SESSION['group_name'] = $wow['group_name'];
            $_SESSION['group_picture'] = $wow['grouppic'];
            $_SESSION['group_color'] = $wow['color'];

        }
        echo "Updated Successfully";
	
   
}
	






?>