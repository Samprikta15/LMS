<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="AdminProfile.css">
</head>
<body>
    <div class="TitleBar">
        <h1>Admin Pannel</h1>

    </div>
    <div id="popupUserForm" class="popup">
        <form id="myForm" class="popup-content" action='AdminProfileUserDataCreate.php'>
            <span id='UserFromClose' class="close">&times;</span>
            <h2>Enter User Data </h2>
            <br>
            <input type="text" placeholder="Name" name="name" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="tel" placeholder="Phone Number" name="phone_no" required>
            <input type="text" placeholder="Roll Number or ID" name="roll_no_or_id" required>
            <select name="category" required>
            <option value="" disabled selected>Select category</option>
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
            </select>
            <input type="text" placeholder="Password" name="password" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="container">
        <div class="sub_container left_container">

            <div id='UserData' class="DatabaseEntity">
                <div style='display:flex; justify-content:space-between;'>
                    <h2>User Table</h2>
                    <button id='create-user-btn' class="create-btn">Create New</button>
                </div>
                <br>
                <div style='display:block;overflow-y:scroll;padding:0px 10px;max-height:80vh'>
                    <section id="userTable">
                        <div class="table-container">
                            <table id="editable-table">
                            <?php
                        
                                session_start();
                                include('connect.php');
                                $query = "SELECT * FROM user";
                                $result = mysqli_query($con, $query);

                                if (!$result) {
                                    die('Error in query: ' . mysqli_error($con));
                                }

                                echo "<table border='1'>
                                <tr>
                                <th>User_id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone_no</th>
                                <th>Roll_no_or_id</th>
                                <th>Category</th>
                                <th>Password</th>
                                </tr>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td contenteditable='false'>" . $row['user_id'] . "</td>";
                                    echo "<td contenteditable='false'>" . $row['name'] . "</td>";
                                    echo "<td contenteditable='false'>" . $row['email'] . "</td>";
                                    echo "<td contenteditable='false'>" . $row['phone_no'] . "</td>";
                                    echo "<td contenteditable='false'>" . $row['roll_no_or_id'] . "</td>";
                                    echo "<td contenteditable='false'>" . $row['category'] . "</td>";
                                    echo "<td contenteditable='false'>" . $row['password'] . "</td>";
                                    echo "<td><button class='edit-btn'>Edit</button></td>";
                                    echo "</tr>";
                                }

                                echo "</table>";

                                mysqli_close($con);
                            ?>
                            </table>
                        </div>
                    </section>
                </div>
     
            </div>
            <div id='BooksData' class="DatabaseEntity">
                <section id="booksTable">
                    <h2>Books Table</h2>
                    <div class="table-container">
                        <table id="booksTableData">
                            <?php
                        
                                
                                include('connect.php');
                                $query = "SELECT * FROM books";
                                $result = mysqli_query($con, $query);

                                if (!$result) {
                                    die('Error in query: ' . mysqli_error($con));
                                }

                                echo "<table border='1'>
                                <tr>
                                <th>Book_id</th>
                                <th>Book_title</th>
                                <th>Author_name</th>
                                <th>category</th>
                                
                                </tr>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td contenteditable='false'>" . $row['book_id'] . "</td>";
                                    echo "<td contenteditable='false'>" . $row['book_title'] . "</td>";
                                    echo "<td contenteditable='false'>" . $row['author_name'] . "</td>";
                                    echo "<td contenteditable='false'>" . $row['category'] . "</td>";
                                    echo "<td><button class='edit-btn'>Edit</button></td>";
                                    echo "</tr>";
                                }

                                echo "</table>";

                                mysqli_close($con);
                            ?>
                        </table>
                    </div>
                </section>
            </div>    
            <div id='SpecificBooksData' class="DatabaseEntity">
                 

                <section id="specificBookTable">
                    <h2>Specific Book Table</h2>
                    <div class="table-container">
                        <table id="specificBookTableData">
                            <!-- Specific Book table data will be inserted here -->
                        </table>
                    </div>
                </section>
            </div>   
            <div id='Records' class="DatabaseEntity">
                <div>Records </div>
            </div>   
        </div>

        
        <div class="sub_container right_container">
            <div id='user_info_btn' class=EntityName> User Data</div>
            <div id='book_info_btn' class=EntityName> Books Information </div>
            <div id='specific_book_info_btn' class=EntityName> Spesific Book Details </div>
            <div id='record_info_btn' class=EntityName> Record History</div>
            <div id='admin_info_btn' class=EntityName> Admin</div>
        </div>
    </div>

    <script src="AdminProfile.js"></script>
</body>
</html>
