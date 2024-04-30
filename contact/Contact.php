
<html>
<head>
    <title>Registration Page</title>
    <style>
          body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('contact.jpg');
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-size:100% 100%;
        }

        .container {
            max-width: 300px;
            margin: 0 auto;
            padding: 15px;
            float:right;
                    }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 7px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
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
 
.contact-form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }

        .contact-form h2 {
            margin-bottom: 20px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 10px;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form textarea {
            height: 100px;
        }

        .contact-form button {
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background: #555;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
 
</head>
<body>
<div class="navbar">

    <a href="http://localhost/LMS/contact/contact.php">Contact</a>
  <a href="http://localhost/LMS/Registration_frontend.php">Register</a>
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
    <a href="http://localhost/LMS/home/index.php">Home</a>
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
    <div class="container">
    <h1 style="text-align:center; color: white;">Contact Us</h1>
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
    </div>
</body>
</html>

