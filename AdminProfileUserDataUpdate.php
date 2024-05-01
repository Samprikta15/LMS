<?php
// Retrieve data from POST request
$data = json_decode(file_get_contents("php://input"), true);

// Include Connection $conn variable 
include('connect.php');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Gather Data into variables 
$name = $data['name'];
$email = $data['email'];
$user_id= $data['user_id'];
$phone_no=$data['phone_no'];
$roll_no_or_id=$data['roll_no_or_id'];
$category=$data['category'];
$password=$data['password'];


// Update Data into Database
$query = "UPDATE `users` SET `name`='$name', `email`='$email', `phone_no`='$phone_no', `roll_no_or_id`='$roll_no_or_id', `category`='$category', `password`='$password' where `user_id`='$user_id'";

$result = mysqli_query($con, $query);
// Close Connection
$conn->close();


// Logging 
// $logMessage = "Log Start :";
// $logFile = 'log';
// file_put_contents($logFile, $logMessage . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $name . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $email . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $user_id . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $phone_no . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $roll_no_or_id . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $category . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $password . PHP_EOL, FILE_APPEND);

?>
