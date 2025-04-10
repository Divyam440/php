<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Create database
    $sql = "CREATE DATABASE mytv";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully!";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");    
    $conn->close();
    
?>