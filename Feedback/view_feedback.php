<?php
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
// getting and displaying data from database
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Feedback: " . $row["feedback"]. " - Rating: " . $row["rating"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();