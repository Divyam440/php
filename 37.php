<?php
function selfMultiply(&$number)
{
$number*=$number;
return $number;
}
$mynum=5;
echo $mynum;
echo"<br>";
selfMultiply($mynum);
echo $mynum;

echo("<br>This program is written by Divyam ERP-006");

?>