
<?php
include_once 'includes/Session.class.php';
include_once 'includes/Mic.class.php';
include_once 'includes/Database.class.php';
include_once 'includes/User.class.php';
Session::start();

function load_template($name){
   // print("including ".__DIR__."../_templates/$name.php");         //displayes the content what is getting included

    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";    //__DIR__. current dir la irundhu po 
}

function validate_credentials($username,$password){
    if($username=="chandhru@gmail.com"  and $password="chandhru" ){
    return true;}
else
{
    return false;
}
}

