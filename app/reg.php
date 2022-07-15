<?php
session_start();
require 'dc.php';
require ('create-avatar.php'); 
 // $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
// function for form validation
function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
}
$fname  =    strtolower(validateData($_POST['firstname']));
$lname  =    strtolower(validateData($_POST['lastname']));
$uname  =    strtolower(validateData($_POST['username']));
$email  =    strtolower(validateData($_POST['email']));
$phone  =    validateData($_POST['phone']);
$pwd    =    validateData($_POST['password']) ;
$gender =    strtolower(validateData($_POST['gender']));
$state  =    strtolower(validateData($_POST['state']));
$town   =    strtolower(validateData($_POST['town']));   
$country=   strtolower(validateData($_POST['country']));
$question=  strtolower(validateData($_POST['question']));
$answer=    strtolower(validateData($_POST['answer']));
$validate=  uniqid(mt_rand(1));
date_default_timezone_set('Africa/Lagos');
$date=      date("Y-m-d");
$time=      date("h:i:sa");
$password=  md5(validateData($pwd));
$user_id=uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10));
$nameFirstChar = strtoupper($uname[0]);
$target_path = createAvatarImage($nameFirstChar);

if (!empty($fname) && !empty($lname) && !empty($uname) && !empty($email) && !empty($phone)&& !empty($pwd)&& !empty($question)&& !empty($answer)) {  

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $sql = mysqli_query($con, "select email from clients_tb where email='{$email}'");

            if (mysqli_num_rows($sql)>0) {
            $msg="This email exist";
            echo $msg;
            }
        else{
             $save=mysqli_query($con, "insert into clients_tb(firstname,lastname,username,email,password,passport,phone,gender,town,state,country,date,time,wallpaper,color,validation_code,question,answer,body_background,about,mode_status,header_background,post_color,user_id)values('$fname','$lname','$uname','$email','$password','$target_path','$phone','nill',town,'state', 'country','$date','$time','$target_path','#673AB7','$validate','$question','$answer','white','something about you','online','#673AB7','#673AB7','$user_id')");
                
             $folder1 = mkdir('profile_pics',0755);     
             $folder2=mkdir('posts',0755);
            $nameFirstChar = strtoupper($uname[0]);
            $target_path = createAvatarImage($nameFirstChar);
            
            $msg= "Account created successfully";
            echo $msg;
            
            
            $subj = "Activation Code (Vchat)";
            $msg = "Use this code to activate your account ".$validate;
            $headers = "FROM: Vchat@gmail.com";
          mail($email,$subj,$msg,$headers);
    }
}
 else{
     $msg ='Invalid email';
     echo $msg;
    }
    
}


else{
    $msg ='all fields are required';
    echo $msg;
}
        
   



    
       
       
   
   









   

?>