<html>
<head>
<link rel="stylesheet" href="student_dashboard.css">


</head>
<body style="background-color:LightCyan">
  <div class="container">
        <div class="sidebar">
            <div class="profile-pic">
                <img src="profile-pic.png" alt="Profile Picture" onerror="this.onerror=null;this.src='default-pic.png';">
            </div>
            <div class="menu">
                <button class="menu-button" onclick="showDetails('myDetails')">My Details</button>
                <button class="menu-button" onclick="showDetails('editDetails')">Edit Details</button>
                <button class="menu-button" onclick="showDetails('borrowedBookDetails')">Borrowed Book Details</button>
            </div>
        </div>
        <div class="main-content">
            <div class="search-bar">
                <input type="text" id="search" placeholder="Search books...">
            </div>
            <div class="book-list">
                <div class="book-header">
                    <div class="book-title">Book Title</div>
                    <div class="book-author">Book Author</div>
                    <div class="book-copies">Book Copies Available</div>
                    <div class="issue-button">Issue</div>
                </div>
                <div id="bookItems">
                    <!-- JavaScript will dynamically populate this section -->
                </div>
            </div>
        </div>
  </div>

  <script src="student_dashboard.js"></script>
</body>
</html>