<?php
$array = array(
    "b" => 3,
    "a" => 1,
    "d" => 5,
    "c" => 2
);

echo "Original Array:<br>";
print_r($array);
echo "<br>";
$numericArray = array(3, 1, 5, 2);
rsort($numericArray);
echo "<br>After rsort() (Descending values):<br>";
print_r($numericArray);
echo "<br>";
asort($array);
echo "<br>After asort() (Ascending values):<br>";
print_r($array);
echo "<br>";
arsort($array);
echo "<br>After arsort() (Descending values):<br>";
print_r($array);
echo "<br>";
ksort($array);
echo "<br>After ksort() (Ascending keys):<br>";
print_r($array);
echo "<br>";
krsort($array);
echo "<br>After krsort() (Descending keys):<br>";
print_r($array);
echo "<br>";
echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");?>
