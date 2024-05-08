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
$book_id= $data['user_id'];
$book_title = $_REQUEST['book_title'];
$author_name = $_REQUEST['author_name'];
$category = $_REQUEST['category'];


// Update Data into Database
$query = "UPDATE `books` SET `book_title`='$book_title', `author_name`='$author_name',`category`='$category' where `book_id`='$book_id'";

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
