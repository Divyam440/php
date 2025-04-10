<?php
    setcookie("username", "", time() - 3600);

    if (!isset($_COOKIE["username"])) {
        echo "Cookie 'username' deleted successfully.";
    } else {
        echo "Cookie still exists: " . $_COOKIE["username"];
    }
    echo("<br> by Divyam Joshi<br>ERP-0221BCA006");?>
