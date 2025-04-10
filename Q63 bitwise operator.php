<?php 
	$First = 5; 
	$second = 3; 
    // Bitwise AND 
	$answer = $First & $second; 
	print_r("Bitwise & of 5 and 3 is $answer<br>");
	// Bitwise OR 
	$answer = $First | $second; 
	print_r("Bitwise | of 5 and 3 is $answer<br>"); 
	// Bitwise XOR 
	$answer = $First ^ $second; 
	print_r("Bitwise ^ of 5 and 3 is $answer<br>"); 
	// Bitwise NOT 
	$answer = ~$First; 
	print_r("Bitwise ~ of 5 is $answer<br>"); 
	// Bitwise Left shift 
	$second = 1; 
	$answer = $First << $second; 
	print_r("5 << 1 will be $answer<br>"); 
	// Bitwise Right shift 
	$answer = $First >> $second; 
	print_r("5 >> 1 will be $answer<br>"); 
	echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");?> 
