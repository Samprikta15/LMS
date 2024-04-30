<html>
<head>
<style>
body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('t.jpeg');
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

    <a href="http://localhost/LMS/Contact.php">Contact</a>
  <a href="http://localhost/LMS/Registration_frontend.php">Register</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Login
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="http://localhost/LMS/Student.php">Student Login</a>
    <a href="http://localhost/LMS/Teacher.php">Teacher Login</a>
    <a href="http://localhost/LMS/Admin.php">Admin Login</a>
  </div>
  </div>
    <a href="http://localhost/LMS/index.php">Home</a>
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
    <h2><font color="white">Teacher Login</h2>
    <form action="/teacher_login" method="post">
        <input type="text" name="teacher_email" placeholder="Email" required>
        <input type="password" name="teacher_password" placeholder="Password" required>
        <input type="submit" value="Login">
        <input type="submit" value="Forgot Password ?">
    </form>
</div>

</body>
</html>