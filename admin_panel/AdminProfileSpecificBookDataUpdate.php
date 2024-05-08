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

$specific_book_id = $_REQUEST['specific_book_id'];
$book_id= $data['book_id'];


// Update Data into Database
$query = "UPDATE `specific_book` SET `book_id`='$book_id' where `specific_book_id`='$specific_book_id'";

$result = mysqli_query($con, $query);
// Close Connection
$conn->close();




?>
