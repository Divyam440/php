<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Stud_ID, Stud_Name, Stud_Email, Stud_Contact FROM students";

// Execute the query and check if it is successful
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["Stud_ID"]. " - Name: " . $row["Stud_Name"]. " - Email: " . $row["Stud_Email"]. " - Contact: " . $row["Stud_Contact"]. "<br>";
    }
} else {
    echo "0 results";
}
echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");$conn->close();

?>
