<?php




session_start();
include('connect.php');
// // Get form data
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone_no = $_REQUEST['phone_no'];





// Logging 
$logMessage = "Log Start :";
$logFile = 'log4';
file_put_contents($logFile, $logMessage . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $name . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $email . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $user_id . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $phone_no . PHP_EOL, FILE_APPEND);



// Insert data into database
$query = "INSERT INTO admin (`name`, `email`, `phone_no`) VALUES ('$name', '$email', '$phone_no')";
$result = mysqli_query($con, $query);


$con->close();



// Redirect to a specific URL
header("Location: AdminProfile.php");
exit; // Make sure to exit after the redirect to prevent further execution
?>