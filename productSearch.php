<?php
// This file should contain your database connection code
include 'db_connection.php';

// This block executes only when form is submitted
if(isset($_GET['search'])) {
    $search = $_GET['search'];

    // Prepare and execute SQL query to fetch records based on search criteria
    $sql = "SELECT * FROM product WHERE pname LIKE '%$search%'";
    $result = $conn->query($sql);

    // Display the matching records
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='product'>";
        echo "<h3>{$row['pname']}</h3>";
        echo "<div class='price' id='fontColorR'>{$row['price']} OR</div>";
        echo "<div class='seller'>{$row['seller']}</div>";
        echo "<div class='category'>Category: {$row['category']}</div>";
        echo "</div>";
    }

    // Close database connection
    mysqli_close($conn);
}
?>

