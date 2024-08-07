
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dasboard</title>
    <link rel="stylesheet" href="./student_dashboard_.css">
    <?php 
    session_start();
      if ($_SESSION['is_loggedin'] = false){
        header("Location: Student.php");
      }
      ?>
</head>


<body>


<!-- Popup Elements start -->
<div id="studentDashboardPopup" class="popup">
          <div class="profile-card">
              <div class="card-header">
                  <h2>Student Profile</h2>
              </div>
              <div class="card-body">
              <?php
                  include('connect.php');
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $password = $_POST['password'];
                  $password = mysqli_real_escape_string($con, $password);
                  }
                //   session_start();
                //   $email=$_SESSION['student_email'];
                  $email="s1@gmail.com";
                  $query = "SELECT * FROM user WHERE category='student' and email='$email'";
                  $result = mysqli_query($con, $query);

                  if (!$result) {
                      ie('Error in query: ' . mysqli_error($con));
                  }
                  while ($row = mysqli_fetch_assoc($result)) {
                  echo "<p><strong> User_id : </strong>"; echo $row['user_id']; echo "</p>";
                  echo "<p><strong> Name : </strong> " ;echo $row['name']; echo "</p>";
                  echo "<p><strong> Email : </strong>" ;echo $row['email']; echo "</p>";
                  echo "<p><strong> Phone_no : </strong>" ;echo $row['phone_no']; echo "</p>";
                  echo "<p><strong> Roll_no_or_id : </strong> " ;echo $row['roll_no_or_id']; echo "</p>";
                 
                  }
                  mysqli_close($con);
              ?>
                  
              </div>
          </div>      
</div>
<!-- Edit Details  -->


<div id="studentDashboardPopupEdit" class="popup">
    <div class="profile-card">
        <div class="card-header">
            <h2>Edit Profile</h2>
        </div>
        <div class="card-body">
    
            <form action="studentdashboardeditfrom.php" method="post">
                  
                    <div class="form-row">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-row">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-row">
                        <label for="phone_no">Phone No:</label>
                        <input type="text" id="phone_no" name="phone_no" required>
                    </div>
                    <div class="form-row">
                        <label for="roll_no_or_id">Roll No/ID:</label>
                        <input type="text" id="roll_no_or_id" name="roll_no_or_id" required>
                    </div>
                    <div class="form-row">
                        <button type="submit">Submit</button>
                        <button type="button" onclick="closeForm()">Close</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<!-- Borrow Book Details  -->

<div id="borrowBookDetailPopup" class="popup">
          <div class="profile-card">
              <div class="card-header">
                  <h2>Borrowed Book List</h2>
                 
              </div>
              <div class="card-body">
              <table class="borrowed-books-table">
                    <thead>
                        <tr>
                            <th>Book Title</th>
                            <th>Specific Book ID</th>
                            <th>Issue Date</th>
                            <th>Return Date</th>
                        </tr>
                    </thead>
                    <tbody>
                 <?php
                  include('connect.php');
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $password = $_POST['password'];
                  $password = mysqli_real_escape_string($con, $password);
                  }
                //   $student_id=$_SESSION['student_id'];
                  $student_id=1;
                  $query = "SELECT books.book_title as book_title, specific_book.specific_book_id as Book_ID, records.issue_date as issue_date, records.return_date as return_date
                  FROM records 
                  INNER JOIN specific_book ON records.specific_book_id = specific_book.specific_book_id 
                  INNER JOIN books ON specific_book.book_id = books.book_id 
                  WHERE records.user_id = '$student_id'";
                  $result = mysqli_query($con, $query);

                  if (!$result) {
                        die('Error in query: ' . mysqli_error($con));
                    }
                  while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>
                           <td>{$row['book_title']}</td>
                           <td>{$row['Book_ID']}</td>
                           <td>{$row['issue_date']}</td>
                           <td>{$row['return_date']}</td>
                           </tr>";
                        }
                      mysqli_close($con);
                    ?>
                    </tbody>
                    </table>
                  <div class="action-buttons" style="display: none;">
                    <button type="button" onclick="submitForm()">Submit</button>
                    <button type="button" onclick="toggleEditMode()">Cancel</button>
                </div>
              </div>
          </div>   
      
</div>

<!-- Popup Elements End -->

  <div class="container">
        <div class="sidebar">
            <div class="profile-pic">
                <img src="profile-pic.png" alt="Profile Picture" onerror="this.onerror=null;this.src='default-pic.png';">
            </div>
            <div class="menu">
                <button class="menu-button" onclick="showDetails('myDetails')">My Details</button>
                <button class="menu-button" onclick="showDetails('myDetailsEdit')">Edit Details</button>
                <button class="menu-button" onclick="showDetails('borrowedBookDetails')">Borrowed Book Details</button>
            </div>
        </div>
        <div class="main-content">
            <div class="search-bar">
                <input type="text" id="search" placeholder="Search books by title, author, or category..." onkeyup="searchBooks()">
                 <button class="search-button" onclick="searchBooks()">GO</button> 
                    
            </div>
            <div class="book-list">
                <div class="book-header">
                    <div class="book-title">Book Title</div>
                    <div class="book-author">Book Author</div>
                    <div class="book-copies">Book Copies Available</div>
                    <div class="issue-button-container">Borrow</div>
                </div>
                <div id="bookItems">
                    <!--PHP Code Start -->


                    <?php
                                include('connect.php');
                                $query = "
                                            SELECT 
                                                b.book_id AS book_id,
                                                b.book_title AS book_title, 
                                                b.author_name AS author_name, 
                                                COUNT(sb.specific_book_id) AS quantity 
                                            FROM 
                                                books b
                                            LEFT JOIN 
                                                specific_book sb 
                                            ON 
                                                b.book_id = sb.book_id 
                                            GROUP BY 
                                                b.book_id
                                        ";

                                $result = mysqli_query($con, $query);

                                if (!$result) {
                                    die('Error in query: ' . mysqli_error($con));
                                }

            
                                while ($row = mysqli_fetch_assoc($result)) {

                                    
                                 echo "<div class='book-item'>" ;
                                 echo "<div class='book-title'>" . $row['book_title'] .  "</div>" ;
                                 echo "<div class='book-author'>" . $row['author_name'] .  "</div>" ;
                                 echo "<div class='book-copies'>".$row['quantity']."</div>" ;
                                 echo "<div class='issue-button-container'>" ;
                                 echo "    <button class='issue-button' id='".$row['book_id']."'> Borrow </button>" ;
                                 echo "    </div>" ;
                                 echo "</div>" ;
                                }

                                echo "</table>";

                                mysqli_close($con);
                    ?>



















                    <div class="book-item">
                        <div class="book-title"> ____ </div>
                        <div class="book-author"> ____ </div>
                        <div class="book-copies"> ____ </div>
                        <div class="issue-button-container">
                            <button class="issue-button"> Borrow </button>
                        </div>
                    </div>
                    <!--PHP Code End -->
                </div>
            </div>
        </div>
  </div>
  <div><button class="issue-button"> <a href="http://localhost/LMS">Log Out </button></div> 
  <script src="./student_dashboard_.js"></script>
</body>
</html>