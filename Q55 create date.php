<?php
$date=date_create("2025-02-21");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date, "Y-M-D"); 
echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");?>