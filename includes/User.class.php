<?
class user
{
public static function signup($user ,$pass , $email , $phone){
    $conn = Database::getConnection(); 
    $pass=md5(strrev(md5($pass)));

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
public static function login($user ,$pass)
{
  $pass=md5(strrev(md5($pass)));
  $query="SELECT * FROM `auth` WHERE `username` = '$user'";
  $conn=Database::getConnection();
  $result=$conn->query($query);
  if($result->num_rows == 1)
  {
    $row =$result->fetch_assoc();
    if($row['password']==$pass)
    {
      return $row;

    }

  }
  else {
    return false;
  }
}
}