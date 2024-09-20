<?php
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