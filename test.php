<pre>
<?ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>
    <?
    include 'libs/load.php';?>
<?
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
// print("heko");
// $result1=signup("chadhru","password","chandhru@gmail.com","1234567899");
// if ($result1){
//     print("Success");
// }
// else{
//     print("Fail");
// }

$mic1= new Mic();
$mic2= new Mic();

/*using class when we can a function we use Mic:: double colon 
it is used because when we write codes  1lakh line we have to repeat the samename for many tymes for proper organisation...if we aint used this Mic::
class then the same testFuction cannot be repeated for repeation we declare with the help of a class*/

Mic::testFunction(); //no construction no destruction

$mic1->brand="Roda";
$mic2->brand="Hyper";

$mic1->light="RGB";
$mic1->setLight("White");
?>
</pre>