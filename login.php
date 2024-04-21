<!-- 


select password from user whrere email = $email  ;


<?php
	include('connect.php');	
	$sql="select password from user whrere email = $email ('".$_REQUEST['fname']."',".$_REQUEST['roll'].",".$_REQUEST['ph'].",'".$_REQUEST['email']."','".$_REQUEST['password']."')";
	$rs=mysqli_query($con,$sql);
	if(!$rs)
		die('Data not inserted');
	echo "<br> <br> Registration Successfull<br> <br/>"
	?> -->