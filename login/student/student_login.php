<?php
session_start();
include('connect.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_email = $_POST['student_email'];
    $student_password = $_POST['student_password'];

    // Sanitize input to prevent SQL injection
    $student_email = mysqli_real_escape_string($con, $student_email);
    $student_password = mysqli_real_escape_string($con, $student_password);

    // Fetch the student record from the database
    $sql = "SELECT * FROM students WHERE email='$student_email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($student_password, $row['password'])) {
            // Password is correct, login successful
            $_SESSION['student_email'] = $student_email;
            header("Location: student_dashboard.php"); // Redirect to student dashboard
            exit;
        } else {
            // Invalid password
            echo "<script>alert('Invalid email or password');</script>";
            echo "<script>window.location.href='student_login.php';</script>";
        }
    } else {
        // No user found with that email
        echo "<script>alert('Invalid email or password');</script>";
        echo "<script>window.location.href='student_login.php';</script>";
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
