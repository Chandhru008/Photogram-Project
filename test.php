<pre>
<?ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>
    <?
    include 'libs/load.php';?>
<?
print("_SERVER\n");
print_r($_SERVER);
print("_GET\n");
print_r($_GET);
print("_POST\n");
print_r($_POST);
print("_FILES\n");
print_r($_FILES);
print("_COOKIE\n");
print_r($_COOKIE);
// print("heko");
// $result1=signup("chadhru","password","chandhru@gmail.com","1234567899");
// if ($result1){
//     print("Success");
// }
// else{
//     print("Fail");
// }

?>
</pre>