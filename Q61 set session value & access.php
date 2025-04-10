<?php
    // Starting session
    session_start();
    // Storing Session Variables
    $_SESSION["firstname"] = "Divyam";
    $_SESSION["lastname"] = "Joshi";
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"] . "<br>";
    echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");?>