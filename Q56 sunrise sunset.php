<?php
echo "Lisbon, Portugal<br>";
echo("Date: " . date("D M d Y"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
echo("<br>Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
echo "<br><br>";
echo "Delhi, India<br>";
echo("Date: " . date("D M d Y"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(), SUNFUNCS_RET_STRING, 28.7041, 77.1025, 90.5, 5.5));
echo("<br>Sunset time: ");
echo(date_sunset(time(), SUNFUNCS_RET_STRING, 28.7041, 77.1025, 90.6, 5.5));
echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");?>