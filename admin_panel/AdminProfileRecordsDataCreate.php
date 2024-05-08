<?php




session_start();
include('connect.php');
// // Get form data
$specific_book_id = $_REQUEST['specific_book_id'];
$user_id = $_REQUEST['user_id'];
$issue_date = $_REQUEST['issue_date'];
$return_date = $_REQUEST['return_date'];




// Logging 
$logMessage = "Log Start :";
$logFile = 'log3';
file_put_contents($logFile, $logMessage . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $specific_book_id . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $user_id . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $user_id . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $issue_date . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $return_date . PHP_EOL, FILE_APPEND);
// Insert data into database
$query = "INSERT INTO records (`specific_book_id`, `user_id`,`issue_date`,`return_date`) VALUES ('$specific_book_id', '$user_id','$issue_date','$return_date')";
$result = mysqli_query($con, $query);


$con->close();



// Redirect to a specific URL
header("Location: AdminProfile.php");
exit; // Make sure to exit after the redirect to prevent further execution
?>