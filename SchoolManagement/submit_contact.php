<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else {
        // Create connection
        $servername = "localhost";
        $username = $_POST["username"];
        $password = $_POST["password"];
        $dbname = "schoolmanagement";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "
            INSERT INTO contact (name, email, message)
            VALUES ('$name', '$email', '$message')

        ";
        $result = $conn->query($sql);
        
        echo "Thank you for your message!";
    }
}
?>