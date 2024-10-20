<?
/*
for newline output in web page we should use <br>
 and for complier level new line char is \n
 */
error_reporting(E_ALL);
ini_set('display_errors','1');   //to display eoor in the browser
$newvar = "Chandhru";
printf("my Name is %s<br>",$newvar);  
//parenthesis are not mandatory in print and echo ..
print("My name is ".$newvar);
echo("My name is ".$newvar);
?>
<?php

$rightvar="RIGHT";
$wrongvar="WRONG";

$stringvar="TRUE";
print("truevar:". $rightvar ."<br>\n");
print("Falsevar:". (int)$wrongevar ."<br>\n");

print("$stringvar is a type of ".gettype($stingvar)."<br>\n"); //gettype-->displays type---> int,float
print('$stringvar is a type of '.gettpye($stringvar)." <br>\n");
?>