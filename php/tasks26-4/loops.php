<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

#task1
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";



#task2

for($i = 0; $i < 5 ; $i++){
    $counter = 5 - $i;
    for($j = 1; $j <= 5; $j++){
        if($counter <= $j){
            echo chr(65+$i);
        }else{
            echo "A";
        }
    }
    echo "<br>";
}


#task3

for($i = 1; $i <= 5 ; $i++){
    $counter = 5 - $i;
    for($j = 1; $j <= 5; $j++){
        if($counter < $j){
            echo $i;
        }else{
            echo 1;
        }
    }
    echo "<br>";
}



#task4
for($i = 1; $i <= 5 ;$i++){
    for($j = 1;$j <= 5;$j++){
        if($i == $j){
            echo $i;
        }else{
            echo 0;
        }
    }

    echo "<br>";
}



#task 5
for($i = 5; $i > 0; $i--){
static $factorial = 1;
$factorial *= $i;
}


echo $factorial;


#task6

$num1 = 0;
$num2 = 1;
$n = 30;
echo "$num1, $num2";
for($i = 1; $i <= $n; $i++) {
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    echo ", $num3"; 
}


#task 7


echo '<table id="time-table" border="2">';
for($i =1;$i <= 5;$i++){
    echo "<tr>";
for($j =1;$j <= 6;$j++){
    $mult = $i * $j;
    echo "<td>"; echo $i ." * " .$j ."= " .$mult ; echo "</td>";
}
    echo "</tr>";
}
echo "</table>";



#task8


for($i =1;$i <= 50;$i++){
if(($i % 5 == 0) && ($i % 3 == 0)){
    echo "FizzBuzz <br>";
}else if($i % 5 == 0){
    echo "Buzz <br>";
}else if($i % 3 == 0){
    echo "Fizz <br>"; 
}
}


#task9

$n = 5;
$count = 0;
for($i = 1; $i <= $n;$i++){
    for($j = 0; $j < $i; $j++){
        $count++;
       echo $count ." ";
    
}
echo "<br>";
}

#task 10



for($i = 0, $k = 0, $l = 5; $i < 11; $k++){
            if($k == abs((5) - $i)){
                for($j = 0; $j < 2 * abs(abs($l) - (5)) + 1; $j++)
                     echo chr(65 + $j);

                echo"<br>";
                $i++;
                $k = -1;
                $l--;
                continue;
            }
            echo"&#160;";
        }


?>
</body>
</html>