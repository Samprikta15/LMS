

	<?php
	include('connect.php');	

	$name = ($_REQUEST['name']);
	$email = ($_REQUEST['email']);
	$phone_no = ($_REQUEST['phone_no']);
    $roll_no_or_id = ($_REQUEST['roll_no_or_id']); // Assuming roll number is an integer
    $category = ($_REQUEST['dropdown']); // This will give you whether the user is a student or a teacher
    $password = ($_REQUEST['password']); // Password will be hashed later
	$sql="insert into user (name,email,phone_no,roll_no_or_id,category,password) VALUES ('$name','$email','$phone_no', '$roll_no_or_id', '$category', '$password')";
    $rs = mysqli_query($con, $sql);
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
		//Redirect to a specific URL
		header("Location: ../index.php");
		exit; // Make sure to exit after the redirect to prevent further execution
	?>


 
