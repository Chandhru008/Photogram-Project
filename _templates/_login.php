
<?
$username=$_POST['email_address'];
$password=$_POST['password'];

$result=validate_credentials($username,$password);
if($result)
{
  ?>
  <main class="container">
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>Bottom LOGIN SUCCESS</h1>
    
  </div>
</main> 
<?} 
else{

?>


<main class="form-signin w-100 m-auto">
  <form method="post" action="login.php">
  <form>
    <img class="mb-4" src="https://labs.selfmade.ninja/assets/brand/logo.svg" alt=""  height="100">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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
    <button class="btn btn-primary w-100 py-2 hrv-grow-rotate" type="submit">Sign in</button>
 
  </form>
</main>
<? 
}
?>