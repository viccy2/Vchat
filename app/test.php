<?php
	require 'dc.php';
	$c = mysqli_query($con,"select * from notification_tb where status='unseen'");
	$number=mysqli_num_rows($c);
	echo $number;

?>