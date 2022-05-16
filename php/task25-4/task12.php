<?php

$sub_1 = 60;
$sub_2 = 86;
$sub_3 = 95;
$sub_4 = 63;
$sub_5 = 55;
$sub_6 = 74;
$sub_7 = 79;


$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5 +$sub_6 +$sub_7;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

echo "The Grade         = '" . $grade . "'\n";
?>