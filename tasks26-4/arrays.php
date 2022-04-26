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
$colors = array('green', 'red','white');

echo "<ul>
<li>$colors[0]</li>
<li>$colors[1]</li>
<li>$colors[2]</li>
</ul>";



#task2
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

foreach($cities as $country => $city)
    echo "The capital of $country is $city <br>";

 
 
 
 
  #task3
$count = 0;
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
foreach($color as $key => $value){
    echo '<br>' .$value .'<br>';
    break; 
}



#task4

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach($fruits as $key => $value){
    echo '<br>' .$value;
}


#task6

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

    $i = count($array1);
    foreach($array2 as $key => $value){
        if(is_numeric($key)){
            $array1[$i] = $value;
            $i++;
        }else{
            $array1[$key] = $value;
        }
        
    }

    echo "<pre>";
    print_r($array1);
   



    #task7

    for($i = 200; $i <= 250;$i++)
        if($i % 4 == 0)
            echo "$i,";
        
    echo "<br>";


    #task8
    $words =  array("abcd","abc","de","hjjj","g","wer");
    $max = strlen($words[0]);
    $min = strlen($words[0]);
    foreach($words as $value){
        if($max < strlen($value))
            $max = strlen($value);
        
        if($min > strlen($value))
            $min = strlen($value);
    }
    echo "<br>";
    echo "The shortest array length is $min. The longest array length is $max";



 
   

    #task10

    $array1 = array( 2, 0, 10, 12, 6);
    $min = $array1[0];
    foreach($array1 as $value)
        if($value != 0)
            if($value < $min)
                $min = $value;
        
    echo $min;

  
?>
</body>
</html>