<?php
// Define a class to maintain information about one row in the specified table
class UserProfile {
    public $name;
    public $email;
    public $phone;
    public $password;

    public function __construct($name, $email, $phone, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
    }
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["Name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Create an instance of UserProfile
    $userProfile = new UserProfile($name, $email, $phone, $password);

    // Render the requested information using appropriate XHTML elements
    echo "<h2>User Profile Information:</h2>";
    echo "<table class='table' border='1'>";
    echo "<tr><th>Name</th><th>".$userProfile->name."</th></tr>";
    echo "<tr><th>Email</th><th>".$userProfile->email."</th></tr>";
    echo "<tr><th>Phone Number</th><th>".$userProfile->phone."</th></tr>";
    echo "<tr><th>Password</th><th>".$userProfile->password."</th></tr>";
        echo "</table>";
}
?>