<?php
if(isset($_POST['calculation'])){
	$nomber1=$_POST['first_number'];
	$nomber2=$_POST['second_number'];
	$results=$_POST['calculation'];
	if($results=="+")
	$ans=$nomber1+$nomber2;
	else if($results=="-")
	$ans=$nomber1-$nomber2;
	else if($results=="x")
	$ans=$nomber1*$nomber2;
	else if($results=="/")
	$ans=$nomber1/$nomber2;
}
?>