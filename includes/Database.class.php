<?
/* where that the same connection is repeating or not 
if the connection is failed then the if block executes 
else the else block gets executed the $conn changees from null and checkes inn the first if block 1!=null then else executes saying existing connection
it only checkes that the data bse is connection or not and it gets connect only once..if connection establish again n again it is a security threat 
to establish only once else block is used and the Database::conn is changed from null to one.... */

class Database
{
    public static $conn = null;

    public static function getConnection()
    {
            if(Database::$conn==null)
            {
                $servername = "mysql.selfmade.ninja";
                $username = "Photogram1";
                $password = "@6KuJYzipDMk8aB";
                $dbname = "Photogram1_newdb";
                
                // Create connection
                $connection = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($connection->connect_error) {
                  die("Connection failed: " . $connection->connect_error);
                }
                else{
                    printf("New connection Establishing");
                    Database::$conn=$connection; //replace null with actua connection
                    return Database::$conn;
                }
            }
            else{
                printf("returning existing establishing...");
                return Database::$conn;
            }
    }
}