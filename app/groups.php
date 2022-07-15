<?php
session_start();
require 'dc.php';
$name = strtoupper($_POST['name']);
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$_SESSION['admin_id'];
$_SESSION['email'];
$group_id= uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10));
$time = time();
$image_name = $_FILES["fileToUpload"]["name"];
$image_type = $_FILES["fileToUpload"]["type"];
$tmp_name =  $_FILES["fileToUpload"]["tmp_name"];
$image_explode = explode('.', $image_name);
$image_ext = end($image_explode);
$extensions = ['png', 'jpeg', 'jpg'];
$new_image =  $time.$image_name;



// <!--===============================================================================================-->

if (!empty($name) && $target_file!="profile_pics/") {
   
   if (in_array($image_ext, $extensions) === true) {
    $sql = mysqli_query($con, "select group_name from groupmember_tb where group_name = '{$name}'");

    if (mysqli_num_rows($sql) > 0) {
       $msg='Group name exist';
       echo $msg;
    }
    else{
             $folder = mkdir('messages',0755);
        $pagename= $group_id.".php";
        $newfilename='./messages/'.$pagename;
        $arr_data = array();
        $return_arr =[
             "sender_id"   => 0,
             "reciever_id" => "friendid",
             "names"        =>"u",
             "message"     =>"text"
        ];
        $fp=fopen($newfilename, 'a');
        array_push($arr_data, $return_arr);
        fwrite($fp, json_encode($arr_data, JSON_PRETTY_PRINT));
        fclose($fp);
        $let=mysqli_query($con, "insert into groupmember_tb (admin_id,memcontact,mememail,group_name,grouppic,memberpic,date,time,color,group_id,member_id,username) values ('$_SESSION[ctid]','$_SESSION[phones]','$_SESSION[email]','$name','profile_pics/$new_image','$_SESSION[pass]','$date','$time','#0a4981','$group_id','$_SESSION[ctid]','$_SESSION[username]')");
             
            if ($let) {
            move_uploaded_file($tmp_name,"profile_pics/".$new_image);
        $set=mysqli_query($con, "select * from groupmember_tb where mememail='$_SESSION[email]'");
        while ($wow=mysqli_fetch_array($set)) {
            $_SESSION['group_name'] = $wow['group_name'];
            $_SESSION['group_picture'] = $wow['grouppic'];
            $_SESSION['group_color'] = $wow['color'];

        }
    }
        $msg='Group created successfully';
        echo $msg;

    }
}

else{
    $msg='Please select an image file -jpeg, jpg, png ';
    echo $msg;
   }
}
 


else{
    $msg="All fields are required";
    echo $msg;
}








?>