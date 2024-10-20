<?
/*
* Access Specifers
* -------------------
* public 
* private
* protected

*/
class Mic    //its a class 
{
public $brand;
public $color;
public $usb_pot;
public $model;
public $light;
public $price;
public static $test;
public static function testFunction()
{
printf("this is a static function,this can be run without object initialisation");   
Mic::$test;     //to call static function we used Mic:: i.e --->class_name::function/object to be called. is a token that allows access to a constant, static property, or static method of a class or one of its parents.
}

public function setLight($light)
{
    print($light);
    print($this->light);         //this is like self in python
}


public function __construct() //constructor
{
printf("Constructinggg...");
}

}
?>