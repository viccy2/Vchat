<?php 
session_start();
require 'dc.php';
	$email =strtolower($_POST['text']);
	$pwd   = md5($_POST['pass']) ;
	$remember = isset($_POST['remember']);
	$saves=mysqli_query($con, "select * from clients_tb where  phone='$email' and password='$pwd' or email='$email' and password='$pwd' ");
	
	while($dos=mysqli_fetch_array($saves)){
		$validations=$dos['validation_code'];
		$actives=$dos['active'];

		
	}	

	if ($validations!=0 and $active!=1) {
		$msgs="Your account has not been activated";
		echo $msgs;
	}
			
	else{
		$save=mysqli_query($con, "select * from clients_tb where  phone='$email' and password='$pwd' and validation_code=0 and active=1 or email='$email' and password='$pwd'and validation_code=0 and active=1; ");
	$log=true;
	while($do=mysqli_fetch_array($save)){
		$validations=$do['validation_code'];

		$actives=$do['active'];
		$log=false;
	}
	if($log){
		$msg="Incorrect Password or Email !!!";	
		echo $msg;
	}
	else{
		if($remember==1){
		$st=mysqli_query($con,"update clients_tb set mode_status='online' where email='$email'");
		setcookie('email',$email, time() + 86400);
		$app=mysqli_query($con, "select * from clients_tb where phone = '$email' or email = '$email'");
		while ($wow=mysqli_fetch_array($app)) {
			$_SESSION['firstname'] = $wow['firstname'];
			$_SESSION['lastname'] = $wow['lastname'];
			$_SESSION['username'] = $wow['username'];
		  	$_SESSION['email'] = $wow['email'];
		  	$_SESSION['username'] = $wow['username'];
		  	$_SESSION['ctid'] = $wow['client_id'];
		  	$_SESSION['pass'] = $wow['passport'];
		  	$_SESSION['name'] = $wow['username'];
		  	$_SESSION['walpss']=$wow['wallpaper'];
		  	$_SESSION['color']=$wow['color'];
			$_SESSION['bodybgcolor']=$wow['body_background'];
			$_SESSION['headerbgcolor']=$wow['header_background'];
			$_SESSION['mode_status']=$wow['mode_status'];
			$_SESSION['phones']=$wow['phone'];
			$_SESSION['user_id']=$wow['validation_code'];
			$_SESSION['account_type']=$wow['account_type'];
			$_SESSION['post_color']=$wow['post_color'];
			$_SESSION['guser_id']=$wow['user_id'];
	     }
	   $grace=$_SESSION['ctid'];
	     if ($app) {
	     	$king=mysqli_query($con, "select * from group_tb where admin_id=$grace");
	     	while ($yep=mysqli_fetch_array($king)) {
	     		$t=$yep['group_name'];
	     		$_SESSION['group_id']=$yep['group_id'];
	     	}
	     	 $mst ="Login Successful";
	     	 echo $mst;
	$c = mysqli_query($con,"select * from notification_tb where status='unseen' and reciever='$_SESSION[ctid]'");
  $_SESSION['number']=mysqli_num_rows($c);  

  $d = mysqli_query($con,"select * from friend_tb where emails ='$_SESSION[email]' and friends_id='$_SESSION[ctid]' ");
  $_SESSION['number_friends']=mysqli_num_rows($d);    

  $e = mysqli_query($con,"select * from request_tb where friends_id = '$_SESSION[ctid]' ");
  $_SESSION['number_request']=mysqli_num_rows($e); 
   $editys=mysqli_query($con, "update friend_tb set mode_status='online' where client_id = '$_SESSION[ctid] '");    

	     }
	    

		}	
		elseif($remember==0){
		$st=mysqli_query($con,"update clients_tb set mode_status='online' where email='$email'");
		$app=mysqli_query($con, "select * from clients_tb where phone = '$email' or email = '$email'");
		while ($wow=mysqli_fetch_array($app)) {
			$_SESSION['firstname'] = $wow['firstname'];
			$_SESSION['lastname'] = $wow['lastname'];
		  	$_SESSION['email'] = $wow['email'];
		  	$_SESSION['username'] = $wow['username'];
		  	$_SESSION['ctid'] = $wow['client_id'];
		  	$_SESSION['pass'] = $wow['passport'];
		  	$_SESSION['name'] = $wow['username'];
		  	$_SESSION['walpss']=$wow['wallpaper'];
		  	$_SESSION['color']=$wow['color'];
			$_SESSION['bodybgcolor']=$wow['body_background'];
			$_SESSION['headerbgcolor']=$wow['header_background'];
			$_SESSION['mode_status']=$wow['mode_status'];
			$_SESSION['phones']=$wow['phone'];
			$_SESSION['user_id']=$wow['validation_code'];
			$_SESSION['account_type']=$wow['account_type'];
			$_SESSION['state']=$wow['state'];
			$_SESSION['country']=$wow['country'];
			$_SESSION['about']=$wow['about'];
			$_SESSION['post_color']=$wow['post_color'];
			$_SESSION['guser_id']=$wow['user_id'];
	     }
	   $grace=$_SESSION['ctid'];
	     if ($app) {
	     	$king=mysqli_query($con, "select * from groupmember_tb where and mememail = '$_SESSION[email]' and member_id = '$_SESSION[ctid]'");
	     	while ($yep=mysqli_fetch_array($king)) {
	     		$t=$yep['group_name'];
	     		$_SESSION['group_id']=$yep['group_id'];
	     	}
	     	 echo 'Login successfull';
$c = mysqli_query($con,"select * from notification_tb where status='unseen' and reciever='$_SESSION[ctid]'");
  $_SESSION['number']=mysqli_num_rows($c);  

  $d = mysqli_query($con,"select * from friend_tb where emails ='$_SESSION[email]' and friends_id='$_SESSION[ctid]' ");
  $_SESSION['number_friends']=mysqli_num_rows($d);    

  $e = mysqli_query($con,"select * from request_tb where friends_id = '$_SESSION[ctid]' ");
  $_SESSION['number_request']=mysqli_num_rows($e);  
  $editys=mysqli_query($con, "update friend_tb set mode_status='online' where client_id = '$_SESSION[ctid] '");  

	     }
		}
	}
}
		

?>


























