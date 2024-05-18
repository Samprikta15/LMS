<?php
session_start();
include('connect.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    // Sanitize input to prevent SQL injection
    $admin_email = mysqli_real_escape_string($con, $admin_email);
    $admin_password = mysqli_real_escape_string($con, $admin_password);

    // Fetch the admin record from the database
    $sql = "SELECT * FROM admin WHERE email='$admin_email' AND password='$admin_password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['admin_email'] = $admin_email;
        header("Location: admin_dashboard.php"); // Redirect to admin dashboard
        exit;
    } else {
        // Login failed
        echo "<script>alert('Invalid email or password');</script>";
        echo "<script>window.location.href='admin_login.php';</script>";
    }
}

mysqli_close($con); // Close the database connection
?>

<?php
		mysqli_close($con);
		//Redirect to a specific URL
		header("Location: ../AdminProfile.php");
		exit; // Make sure to exit after the redirect to prevent further execution
	?>