<?php
include 'libs/load.php';

$user="admin";
$pass="admin";
$result=null;
if(isset($_GET['logout']))
{
    Session::destroy();
    die("SEssion is destroyed");
}
if(Session::get('is_loggedin'))
{
    $userdata=Session::get('session_user');
    print("WELCOME BACK,$userdata[username]");
    $result=$userdata;

}
else{
    printf("No session found");
    $result=User::login($user,$pass);
    if($result)
    {
        echo "Login Success,$result[username]";
        Session::set('is_loggedin',true);
        Session::get('session_user',$result);

    }
    else{
        echo"Login failed";
    }
}
?>