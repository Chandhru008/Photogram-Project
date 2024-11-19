<?
class user
{

public static function signup($user ,$pass , $email , $phone){
  
$option=[
    'cost'=>9,    
];
$pass= password_hash($pass,PASSWORD_BCRYPT,$option);
    $conn = Database::getConnection(); 
    

$sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$user', '$pass', '$email', '$phone', '0', '1')";

if ($conn->query($sql) == TRUE) {
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
  
  $query="SELECT * FROM `auth` WHERE `username` = '$user'";
  $conn=Database::getConnection();
  $result=$conn->query($query);
  if($result->num_rows == 1)
  {
    $row =$result->fetch_assoc();
    // if($row['password']==$pass)
    if(password_verify($pass,$row['password']))
    {
      return $row;

    }

  }
  else {
    return false;
  }
}
  public function __construct($username)
  {
    $this->conn = Database::getConnection();
    $this->conn->query();
    $this->username=$username;
  }
}