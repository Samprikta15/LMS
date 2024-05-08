<?php




session_start();
include('connect.php');
// // Get form data
$book_id = $_REQUEST['book_id'];






// Logging 
$logMessage = "Log Start :";
$logFile = 'log2';
file_put_contents($logFile, $logMessage . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $book_id . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $user_id . PHP_EOL, FILE_APPEND);

// Insert data into database
$query = "INSERT INTO specific_book (`book_id`) VALUES ('$book_id')";
$result = mysqli_query($con, $query);


$con->close();



// Redirect to a specific URL
header("Location: AdminProfile.php");
exit; // Make sure to exit after the redirect to prevent further execution
?>