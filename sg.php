<pre><?
    //  session_start();
    // setcookie ("testcookie", "testvalue",time() + (86400*30),"/");
     include 'libs/load.php';
    


// print("_SERVER\n");
// print_r($_SERVER);
// print("_GET\n");
// print_r($_GET);
// print("_POST\n");
// print_r($_POST);
// print("_FILES\n");
// print_r($_FILES);
// print("_COOKIE\n");
// print_r($_COOKIE);
print("_SESSIONS\n");
print_r($_SESSION);


if (isset($_GET['clear']))   //if i pass clear in url previous created session will be distroyed
{
    printf("CLEARING....");
    Session::unset();
}
if (isset($_GET['destroy']))   
{
    printf("DESTROY....");
    Session::destroy();
}
if(Session::isset('a'))
{
    printf("A Already exists....valuue:".Session::get('a')."\n");
}
else{
    Session::set('a',time());
    printf("Assigning new value : $_SESSION[a]\n");
}

?></pre>