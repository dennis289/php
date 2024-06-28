<?php
include 'index.php';
// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campaign_feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// capture data from form
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];
 
//submit taken data to database
$sql = "INSERT INTO feedback (name, email, feedback, rating)
VALUES ('$name', '$email', '$feedback', '$rating')";
$result = $conn->query($sql);
if ($result === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
