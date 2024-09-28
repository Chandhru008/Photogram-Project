<?ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>
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


function signup($user,$pass,$email,$phone)
{
    
$servername = "mysql.selfmade.ninja";
$username = "Photogram1";
$password = "@6KuJYzipDMk8aB";
$dbname = "Photogram1_newdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$user', '$pass', '$email', '$phone', '0', '1')";

if ($conn->query($sql) === TRUE) {
    $result = true;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $result = false;
}

$conn->close();
return $result;
}


?>