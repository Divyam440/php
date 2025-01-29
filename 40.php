<?php
function countDigits($number) {
    // Handle negative numbers
    if ($number < 0) {
        $number = abs($number);
    }

    // Special case for zero
    if ($number == 0) {
        return 1;
    }

    $count = 0;
    
    // Loop to divide the number by 10 until it becomes zero
    while ($number > 0) {
        $number = (int)($number / 10);  // Remove last digit
        $count++;  // Increment digit count
    }
    
    return $count;
}

// Test the function
$number = 12345;
echo "Number of digits in $number is: " . countDigits($number);
echo("<br>This program is written by Divyam ERP-006");
?>