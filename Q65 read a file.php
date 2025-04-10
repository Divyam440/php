
<?php
$file = fopen("welcome.txt", "r") or exit("Unable to open file!");

while (!feof($file)) {
    echo fgets($file) . "<br>";
}

fclose($file);

echo "<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006";
?>