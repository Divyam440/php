<?php

    // Starting session
    session_start();
     
    // Removing session variable
    if(isset($_SESSION["lastname"])){
        unset($_SESSION["lastname"]);
    }
    else{
        echo "Session already destroyed.";
    }
    echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");?>