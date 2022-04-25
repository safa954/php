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
    $year = 2013;
    if ($year % 400 == 0) {
       echo $year." is a leap year.";
    } elseif ($year % 100 == 0) {
       echo $year." is not a leap year.";
    } elseif ($year % 4 == 0) {
       echo $year." is a leap year.";
    } else {
       echo $year." is not a leap year.";
    }



    
    #task2
    $today = new DateTime();
    echo 'Today is: ' . $today->format('m-d-Y') . '<br />';
    $spring = new DateTime('March 20');
    $summer = new DateTime('June 20');
    $fall = new DateTime('September 22');
    $winter = new DateTime('December 21');
    
    switch(true) {
        case $today >= $spring && $today < $summer:
            echo 'It\'s Spring!';
            break;
    
        case $today >= $summer && $today < $fall:
            echo 'It\'s Summer!';
            break;
    
        case $today >= $fall && $today < $winter:
            echo 'It\'s Fall!';
            break;
    
        default:
            echo 'It must be Winter!';
    }
        

    #task3
    function test($x, $y) 
    {
        return $x == $y ? ($x + $y)*3 : $x + $y;
    }
    
    echo test(2, 2)."\n";   




    #task4
    function test($x, $y) 
    {
        return ($x == 30) || ($y == 30) || ($x + $y == 30);
    }
        



   #task 5
   function test($n) 
   {
      return $n % 3 == 0 ;
   }
   
   var_dump(test(3));

   #task6

   function test($x) 
   {
       return ($x >= 20 && $x <= 50);
   }
   
   var_dump(test(11));
   var_dump(test(30));
    
    

   #task7
   $num1=1;
      $num2=5;
      $num3=9;
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
      if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }



      

  
  
       ?>
    
</body>
</html>