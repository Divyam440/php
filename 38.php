<?php
function factorial($number){
if($number==0||$number==1){
return 1;
}
return $number*factorial($number-1);
}
$number=5;
$result=factorial($number);
echo"Factorial of $number is $result";
echo("<br>This program is written by Divyam ERP-006");
?>