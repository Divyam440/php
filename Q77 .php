<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mytv";
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $class = $_POST["class"];
    $sem = $_POST["sem"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];

    // Connect to database
    $conn = new mysqli("localhost", "root", "", "studentdb");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert into table
    $sql = "INSERT INTO students (name, class, sem, gender, mobile)
            VALUES ('$name', '$class', '$sem', '$gender', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
<h2>Registration Form</h2>
<form method="post" action="">
    Name: <input type="text" name="name" required><br><br>
    Class: 
    <select name="class" required>
        <option value="">Select Class</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="BSc">BSc</option>
    </select><br><br>
    Semester: <input type="text" name="sem" required><br><br>
    Gender: 
    <input type="radio" name="gender" value="Male" required> Male 
    <input type="radio" name="gender" value="Female" required> Female <br><br>
    Mobile: <input type="text" name="mobile" required><br><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Cancel">
</form>
</body>
</html>
