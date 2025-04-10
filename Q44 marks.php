<?php

$marks = array( 
    "DJ" => array(
        "physics" => 75,
        "maths" => 90,    
        "Bio" => 96,
        "ip" => 100,
        "psychology" => 80
    )
);

echo "Marks for DJ:<br>";
foreach ($marks['DJ'] as $subject => $score) {
    echo ucfirst($subject) . ": " . $score . "<br>";                
}

$total_marks = array_sum($marks['DJ']); 

$total_subj = count($marks['DJ']);  

$out_of = $total_subj * 100;  
$perc = ($total_marks / $out_of) * 100;

echo "<br>Total Marks: ".$total_marks."<br>";
echo "Percentage: ".number_format($perc,2)."%"."<br>";

echo("<br>This program is written by Divyam Joshi<br>ERPID-0221BCA006");

?>
