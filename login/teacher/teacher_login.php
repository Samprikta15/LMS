<?php
session_start();
include('connect.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_email = $_POST['teacher_email'];
    $teacher_password = $_POST['teacher_password'];

    // Sanitize input to prevent SQL injection
    $teacher_email = mysqli_real_escape_string($con, $teacher_email);
    $teacher_password = mysqli_real_escape_string($con, $teacher_password);

    // Fetch the teacher record from the database
    $sql = "SELECT * FROM user WHERE email='$teacher_email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($teacher_password, $row['password'])) {
            // Password is correct, login successful
            $_SESSION['teacher_email'] = $teacher_email;
            header("Location: teacher_dashboard.php"); // Redirect to teacher dashboard
            exit;
        } else {
            // Invalid password
            echo "<script>alert('Invalid email or password');</script>";
            echo "<script>window.location.href='teacher_login.php';</script>";
        }
    } else {
        // No user found with that email
        echo "<script>alert('Invalid email or password');</script>";
        echo "<script>window.location.href='teacher_login.php';</script>";
    }
}

mysqli_close($con); // Close the database connection
?>


<?php
	mysqli_close($con);
	//Redirect to a specific URL
	header("Location: ../index.php");
	exit; // Make sure to exit after the redirect to prevent further execution
?>