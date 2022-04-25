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
    #task9
    
function check_vote() 
{
    $name = "safa";
    $age = 15;
    if ($age >= 18) {
        echo $name . ", you Are Eligible For Vote";
    } else {
        echo $name . ", you are not eligible for vote. ";
    }
}
check_vote(); 


#task10
function CheckNumber($x) {
    if ($x > 0)
      {$message = "Positive number";}
    if ($x == 0)
      {$message = "Zero";}
    if ($x < 0)
      {$message = "Negative number";}
    echo $message."\n";
  }




  


    
    ?>
</body>
</html>