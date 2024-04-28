
<html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('contact.jpg');
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-size:100% 100%;
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
  padding: 6px 20px;
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
<title>
This ia a project of library management
</title>
</head>
<body style="background-color:LightCyan">
<div class="navbar">

    <a href="#contact">Contact</a>
    <a href="#about">About</a>
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
    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
        <section class="contact-form">
            <h2>Get in Touch</h2>
            <form action="#" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Library Management System. All rights reserved.</p>
    </footer>
</body>
</html>
<!--
<html>
<head>
<title>Responsive contact page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p>   </p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>  </p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>  </p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>  </p>
                </div>
            </div>
        </div>
    </div>    
</section>    


</div>
</body>
</html>
-->