<?php
// Database credentials
$servername = "database-1.ccjtp6srfafk.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin$123";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Securely get form data
$name = $conn->real_escape_string($_POST["name"]);
$email = $conn->real_escape_string($_POST["email"]);
$website = $conn->real_escape_string($_POST["website"]);
$comment = $conn->real_escape_string($_POST["comment"]);
$gender = $conn->real_escape_string($_POST["gender"]);

// Insert data into MySQL
$sql = "INSERT INTO users (name, email, website, comment, gender) 
        VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>New record created successfully</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

