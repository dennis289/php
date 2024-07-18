<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <body>
        <form action="post">
            <label for="name"> Name </label>
            <input type="text" name="name" id="name" required>
            <label for="email"> Email </label>
            <input type="email" name="email" id="email" required>
            <label for="department">Department</label>
            <input type="text" name="department" id="department" required>
            <label for="staffID">Staff Id</label>
            <input type="text" name="staffID" id="staffID" required>
            <br>
            <button type="submit" name="submit">Submit</button>

        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $staffID = $_POST['staffID'];
    $conn = new mysqli("localhost", "root", "", "schoolmanagement");
    if($conn->connect_error){
        die("Connection failed: {$conn->connect_error}");
    }
    $sql = "INSERT INTO stafftable (name, email, department, staffID) VALUES ('$name', '$email', '$department', '$staffID')";
    $result = $conn->query($sql);
    if($result === TRUE){
        echo "New record created successfully";
        $_SESSION['staff'] = true;
        header('Location: Students.php');
    } else {
        echo "Error: {$sql}<br>{$conn->error}";
    }
    $conn->close();
}
// }
// $sql = "SELECT * FROM stafftable";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "Name: " . $row["name"] . "<br>";
//         echo "Email: " . $row["email"] . "<br>";
//         echo "Department: " . $row["department"] . "<br>";
//         echo "Staff ID: " . $row["staffID"] . "<br>";
//         echo "<br>";
//     }
// } else {
//     echo "No records found";
// }