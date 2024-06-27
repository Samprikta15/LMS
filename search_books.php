<?php
include('connect.php');

$search = $_GET['search'];
$search = mysqli_real_escape_string($con, $search);

$query = "
    SELECT 
        b.book_id AS book_id,
        b.book_title AS book_title, 
        b.author_name AS author_name, 
        b.category AS category, 
        COUNT(sb.specific_book_id) AS quantity 
    FROM 
        books b
    LEFT JOIN 
        specific_book sb 
    ON 
        b.book_id = sb.book_id 
    WHERE 
        b.book_title LIKE '%$search%' 
        OR b.author_name LIKE '%$search%' 
        OR b.category LIKE '%$search%'
    GROUP BY 
        b.book_id
";

$result = mysqli_query($con, $query);

if (!$result) {
    die('Error in query: ' . mysqli_error($con));
}

$books = [];
while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
}

mysqli_close($con);

echo json_encode($books);
?>
