<?
class user
{
public static function signup($user ,$pass , $email , $phone){
    $conn = Database::getConnection(); 

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
}