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
$book_id= $data['book_id'];
$book_title = $_REQUEST['book_title'];
$author_name = $_REQUEST['author_name'];
$category = $_REQUEST['category'];

echo $book_id
echo $book_title
echo $author_name
echo $category
// Update Data into Database
$query = "UPDATE `books` SET `book_title`='$book_title', `author_name`='$author_name',`category`='$category' where `book_id`='$book_id'";

$result = mysqli_query($con, $query);
// Close Connection
$conn->close();




?>
