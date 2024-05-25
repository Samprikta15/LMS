<html>
<head>
<link rel="stylesheet" href="navbar.css">
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
<div class="login-section">
    <h2><font color="white">Student Login</h2>
    <form action="student_login.php" method="post">
        <input type="text" name="student_email" placeholder="Email" required>
        <input type="password" name="student_password" placeholder="Password" required>
        <input type="submit" value="Login">
        <input type="submit" value="Forgot Password ?">
    </form>
</div>
</body>
</html>