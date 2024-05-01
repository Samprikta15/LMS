<?php




session_start();
include('connect.php');
// // Get form data
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone_no = $_REQUEST['phone_no'];
$roll_no_or_id = $_REQUEST['roll_no_or_id'];
$category = $_REQUEST['category'];
$password = $_REQUEST['password'];




// Logging 
$logMessage = "Log Start :";
$logFile = 'log';
file_put_contents($logFile, $logMessage . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $name . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $email . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $user_id . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $phone_no . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $roll_no_or_id . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $category . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $password . PHP_EOL, FILE_APPEND);


// Insert data into database
$query = "INSERT INTO user (`name`, `email`, `phone_no`, `roll_no_or_id`, `category`, `password`) VALUES ('$name', '$email', '$phone_no', '$roll_no_or_id', '$category', '$password')";
$result = mysqli_query($con, $query);


$con->close();



// Redirect to a specific URL
header("Location: AdminProfile.php");
exit; // Make sure to exit after the redirect to prevent further execution
?>