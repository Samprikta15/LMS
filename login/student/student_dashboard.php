<html>
<head>
<link rel="stylesheet" href="student_dashboard.css">
<link rel="stylesheet" href="navbar.css">

</head>
<body style="background-color:LightCyan">
<div class="navbar">

    <a href="http://localhost/LMS/contact/contact.php">Contact</a>
  <a href="http://localhost/LMS/register/Registration_frontend.php">Register</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Login
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="http://localhost/LMS/login/student/student.php">Student Login</a>
    <a href="http://localhost/LMS/login/teacher/teacher.php">Teacher Login</a>
    <a href="http://localhost/LMS/login/admin/admin.php">Admin Login</a>
  </div>
  </div>
    <a href="http://localhost/LMS/">Home</a>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

</script>
<div style="padding:20px">
</div>
<div id="dashboardPopup" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h1>Student Dashboard</h1>
            <?php
                include('connect.php');
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $password = $_POST['password'];
                $password = mysqli_real_escape_string($con, $password);
                }
                $query = "SELECT * FROM user WHERE category='Student' ";
                $result = mysqli_query($con, $query);

                if (!$result) {
                    ie('Error in query: ' . mysqli_error($con));
                }
                while ($row = mysqli_fetch_assoc($result)) {
                echo "User_id :"; echo $row['user_id']; echo "<br>";
                echo "Name :" ;echo $row['name']; echo "<br>";
                echo "Email :" ;echo $row['email']; echo "<br>";
                echo "Phone_no:" ;echo $row['phone_no']; echo "<br>";
                echo "Roll_no_or_id" ;echo $row['roll_no_or_id']; echo "<br>";
                echo "Category" ;echo $row['category']; echo "<br>";
                echo "Password:"; echo $row['password']; echo "<br>";
                }
                

                

                mysqli_close($con);
            ?>
        </div>
</div>
<button id='user-profile-btn' class="create-btn">User Profile</button>
<script src="student_dashboard.js"></script>
</body>
</html>