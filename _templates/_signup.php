<?
print_r($_POST);
$signup=false;
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])){

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email_address'];
$phone=$_POST['phone'];
$result=signup($username,$password,$email,$phone);
$signup=true;

}
echo"hello";
?>

<?
if($signup)

{
  if($result)
  {
    ?>
  <main class="container">
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>SignUp success</h1>
    
  </div>
</main> 
  
  <?
  }
  else{
    ?>
  <main class="container">
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>SignUp Failed</h1>
    
  </div>
</main> 
<?
  }}
else{
?>
<main class="form-signup w-100 m-auto">
  <form method="post" action="signup.php">
  <form>
    <img class="mb-4" src="https://labs.selfmade.ninja/assets/brand/logo.svg" alt=""  height="100">
    <h1 class="h3 mb-3 fw-normal">Signup Here</h1>

    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Username</label>
    </div>

    <div class="form-floating">
      <input name="phone" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Phone</label>
    </div>

    <div class="form-floating">
      <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2 hrv-grow-rotate" type="submit">Sign up</button>
 
  </form>
</main>
<?
} 
?>