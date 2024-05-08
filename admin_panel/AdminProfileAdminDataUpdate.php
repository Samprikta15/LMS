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
$admin_id= $data['admin_id'];
$phone_no=$data['phone_no'];



// Update Data into Database
$query = "UPDATE `admin` SET `name`='$name', `email`='$email', `phone_no`='$phone_no' where `admin_id`='$admin_id'";

$result = mysqli_query($con, $query);
// Close Connection
$conn->close();


?>
