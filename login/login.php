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

<?php
session_start();
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['email'] = $email;
        header("Location: welcome.php");
    } else {
        // Login failed
        echo "Invalid email or password.";
    }
}

mysqli_close($con);
?>
