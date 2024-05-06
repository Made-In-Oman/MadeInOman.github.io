<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];
    echo "<h2>Customer Feedback</h2>";
    echo "<table border='1'>";
    echo "<tr><td>Name:</td><td>$name</td></tr>";
    echo "<tr><td>Email:</td><td>$email</td></tr>";
    echo "<tr><td>Rating:</td><td>$rating</td></tr>";
    echo "<tr><td>Comments:</td><td>$comments</td></tr>";
    echo "</table>";
} else {
    echo "Error: Form not submitted.";
}
?>