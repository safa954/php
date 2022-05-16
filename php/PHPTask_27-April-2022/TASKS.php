
<?php

#TASK1

function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 
$number = 31;
$flag = primeCheck($number);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime"


#TASK2

$Input= "remove";  
echo "Reverse string of $string is " .strrev ( $Input ); 


#TASK3
function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(is_str_lowercase('abc def ghi'));


#TASK4

$a = 10;
$b = 12;
 
echo " before swapping is:";
echo "Number a =".$a." and b=".$b . "<br>"."<br>"."<br>";

$t = $a;
$a = $b;
$b = $t;
 
echo "after swapping is:";
echo "Number a =".$a." & b=".$b."\n";

#TASK6

function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    if ($number == $sum)
        return 1;
   
    return 0;   
}
 
$number = 407;
$flag = armstrongCheck($number);
if ($flag == 1)
    echo "Yes";
else
    echo "No";


    #TASK7
    function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
echo check_palindrome('Eva, can I see bees in a cave');



#TASK8
$input = array(2, 4, 7, 4, 8, 4);
$result = array_unique($input);
print_r($result);
?>