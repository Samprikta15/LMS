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
$record_id= $data['record_id'];
$specific_book_id = $data['specific_book_id'];
$user_id = $data['user_id'];
$issue_date = $data['issue_date'];
$return_date = $data['return_date'];



// Update Data into Database
$query = "UPDATE `records` SET `specific_book_id`='$specific_book_id', `user_id`='$user_id',`issue_date`='$issue_date',`return_date`='$return_date' where `record_id`='$record_id'";



$result = mysqli_query($con, $query);
// Close Connection
$conn->close();




?>
