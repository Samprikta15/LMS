<html>
<head>
<link rel="stylesheet" href="teacher_dashboard.css">
<link rel="stylesheet" href="navbar.css">
<style>
body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('t.jpeg');
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-size:100% 100%;
        }
</style>
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
<div id="teacherDashboardPopup" class="popup">



          <div class="profile-card">
              <div class="card-header">
                  <h2>Teacher Profile</h2>
                  <button class="teacher_edit-btn" onclick="toggleEditMode()">Edit</button>
              </div>
              <div class="card-body">
              <?php
                  include('connect.php');
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $password = $_POST['password'];
                  $password = mysqli_real_escape_string($con, $password);
                  }
                  $query = "SELECT * FROM user WHERE category='teacher' and email='r@gmail.com'";
                  $result = mysqli_query($con, $query);

                  if (!$result) {
                      ie('Error in query: ' . mysqli_error($con));
                  }
                  while ($row = mysqli_fetch_assoc($result)) {
                  echo "<p><strong> User_id : </strong>    <span id='user-id' class='editable'>"; echo $row['user_id']; echo "</span></p>";
                  echo "<p><strong> Name : </strong>    <span id='user-name' class='editable'>" ;echo $row['name']; echo "</span></p>";
                  echo "<p><strong> Email : </strong>    <span id='user-email' class='editable'>" ;echo $row['email']; echo "</span></p>";
                  echo "<p><strong> Phone_no : </strong>    <span id='user-phone' class='editable'>" ;echo $row['phone_no']; echo "</span></p>";
                  echo "<p><strong> Roll_no_or_id : </strong>    <span id='user-roll' class='editable'>" ;echo $row['roll_no_or_id']; echo "</span></p>";
                 
                  }
                  mysqli_close($con);
              ?>
                  <div class="action-buttons" style="display: none;">
                    <button type="button" onclick="submitForm()">Submit</button>
                    <button type="button" onclick="toggleEditMode()">Cancel</button>
                </div>
              </div>
          </div>      
</div>
<div class="search-container">
            <form autocomplete="off">
                <input type="text" placeholder="Search..." id="search" onkeyup="showSuggestions(this.value)">
                <div id="suggestions" class="suggestions-box"></div>
            </form>
        </div>
<button id='user-profile-btn' class="profile-btn">User Profile</button>
<script src="teacher_dashboard.js"></script>
</body>
</html>