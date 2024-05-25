<html>
<head>
<link rel="stylesheet" href="student_dashboard.css">
<style>

body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('s.jpeg');
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-size:100% 100%;
        }

.login-section {
            width: 500px;
            margin: 50px auto;
            padding: 50px;  
                         
        }
        .login-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .login-section input[type="text"],
        .login-section input[type="password"],
        .login-section input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
              
        }
        
        .login-section input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            
        }
        
        .login-section input[type="submit"]:hover {
            background-color: #45a049;
            
        }
        .navbar {
            background-color: #008B8B;
            overflow: hidden;
        }
        
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 6px 20px;
            text-decoration: none;
        }
        
        .navbar a:hover {
            background-color: #008B8B;
            color: black;
        }

        .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 6px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: #008B8B;
   color: black;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #008B8B;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 6px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {
  background-color: #008B8B;
}

.show {
  display: block;
}

.wrapper {
  width: 800px;
  margin: auto;
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
                $query = "SELECT * FROM user WHERE category='Student' AND password='$password'";
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