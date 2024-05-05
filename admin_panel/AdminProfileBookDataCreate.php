<?php




session_start();
include('connect.php');
// // Get form data
$book_title = $data['book_title'];
$author_name= $data['author_name'];
$category=$data['category'];



// Logging 
$logMessage = "Log Start :";
$logFile = 'log1';
file_put_contents($logFile, $logMessage . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $book_title . PHP_EOL, FILE_APPEND);
// file_put_contents($logFile, $user_id . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $author_name . PHP_EOL, FILE_APPEND);
file_put_contents($logFile, $category . PHP_EOL, FILE_APPEND);



// Insert data into database
$query = "INSERT INTO books (`book_title`, `author_name`, `category`) VALUES ('$book_title', '$author_name', '$category')";
$result = mysqli_query($con, $query);


$con->close();



// Redirect to a specific URL
//header("Location: AdminProfile.php");
exit; // Make sure to exit after the redirect to prevent further execution
?>