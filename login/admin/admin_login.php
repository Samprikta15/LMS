<?php
session_start();
include('connect.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_email = $_POST['admin_email'];
    $admin_phone_no = $_POST['admin_phone_no'];

    // Sanitize input to prevent SQL injection
    $admin_email = mysqli_real_escape_string($con, $admin_email);
    $admin_phone_no = mysqli_real_escape_string($con, $admin_phone_no);

    // Fetch the admin record from the database
    $sql = "SELECT * FROM admin WHERE email='$admin_email' AND phone_no='$admin_phone_no'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['admin_email'] = $admin_email;
        header("Location: AdminProfile.php"); // Redirect to admin dashboard
        exit;
    } else {
        // Login failed
        echo "<script>alert('Invalid email or password');</script>";
        echo "<script>window.location.href='admin_login.php';</script>";
    }
}

mysqli_close($con); // Close the database connection
?>
