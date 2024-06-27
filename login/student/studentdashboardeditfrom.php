<?php
include('connect.php');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$roll_no_or_id = $_POST['roll_no_or_id'];

$sql = "UPDATE `user` SET `name`='$name', `email`='$email', `phone_no`='$phone_no', `roll_no_or_id`='$roll_no_or_id' where `user_id`=1";


if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
header("Location: ./student_dashboard.php");
exit; 
?>
