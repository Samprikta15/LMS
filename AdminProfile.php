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
    <div class="container">
        <div class="sub_container left_container">

            <div id='UserData' class="DatabaseEntity">
                <div style='display:flex; justify-content:space-between;'>
                    <h2>User Table</h2>
                    <button class="create-btn">Create New</button>

                </div>
                <section id="userTable">
                    <div class="table-container">
                        <table id="editable-table">
                        <?php
                       
                            session_start();
                            include('connect.php');
                            $query = "SELECT * FROM users";
                            $result = mysqli_query($con, $query);

                            if (!$result) {
                                die('Error in query: ' . mysqli_error($con));
                            }

                            echo "<table border='1'>
                            <tr>
                            <th>user_id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone_no</th>
                            <th>roll_no_or_id</th>
                            <th>category</th>
                            <th>password</th>
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
            <div id='BooksData' class="DatabaseEntity">
                <section id="booksTable">
                    <h2>Books Table</h2>
                    <div class="table-container">
                        <table id="booksTableData">
                            <!-- Books table data will be inserted here -->
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
