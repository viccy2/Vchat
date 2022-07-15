<?php
	session_start();
	require 'dc.php';
	$activate_code = $_POST['activate'];
	$email = strtolower($_POST['email']);
	$saves = mysqli_query($con, "select * from clients_tb where email='$email'");
	while ($k=mysqli_fetch_array($saves)) {
		$emails=$k['email'];
		$acts_code=$k['validation_code'];
		$active=$k['active'];
	}
	if (!empty($activate_code) && !empty($email)) {
		if($emails='$email' and $active==1 and $acts_code==0){
		$tes="Your account has been activated already";
		echo $tes;
		
	}
	elseif ($active==0 and $activate_code==$acts_code) {
		$st=mysqli_query($con,"update clients_tb set validation_code=0,active=1 where email='$email'");
			echo "Account activated successfully";
			
			
	}
	else{
		$t="Incorrect Email or Activation Code Input";
		echo $t;
	}
	}
	else{
	 	$t="All fields are required";
		echo $t;
	}
	

	

?>

