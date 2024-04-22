<html>
<body >
<center>
<div class="container">
<div class="sign_up">
	<?php
	include('connect.php');	

	$fullname = ($_REQUEST['fname']);
    $roll_no = (int)$_REQUEST['roll']; // Assuming roll number is an integer
    $phone_no = ($_REQUEST['ph']);
    $email = ($_REQUEST['email']);
    $password = $_REQUEST['password']; // Password will be hashed later
	

	$sql="insert into user (fullname,roll_no,phone_no,email,password) VALUES ('$fullname', $roll_no, '$phone_no', '$email', '$password')";
    $rs = mysqli_query($con, $sql);;
	$rs=mysqli_query($con,$sql);
	if(!$rs)
		die('Data not inserted');
	echo "<br> <br> Registration Successfull<br> <br/>"
	?>
<!-- 
<button type="button" ><a href="sign_up.php">OK</a></button>
<button type="button" ><a href="index.php">Home</a></button> -->

<?php
mysqli_close($con);
// Redirect to a specific URL
header("Location: index.php");
exit; // Make sure to exit after the redirect to prevent further execution

?>
</center>
</body>
</html> 
