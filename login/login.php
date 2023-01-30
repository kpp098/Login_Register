<?php
  require 'index.php';
  
 




  $obj=new db();




      if(isset($_POST["login"]))  
          {
            $query = $obj->select($_POST["email"],$_POST["pass"]); 
            
          }
      if(isset($_POST["register"]))  
          {
            header("location:register.php") ;       
          }
      
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="style.css">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
  </head>
  <body>
    

    <form method="POST">
    <div class ="row">
	<div class="col-md-6 mx-auto p-0" style="background:url(login/assets/img/bg.jpg) top center repeat; margin-right:-1%;">
		<div class="card">
<div class="login-box">
	<div class="login-snip">
		<input id="tab-1" type="radio"  name="tab" class="sign-in" checked><label style="margin-left:35%;" for="tab-1" class="tab tab11">Login</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		
		<div class="login-space">
			<div class="login">
				<div class="group">

					<label for="user" class="label">Email Address</label>
					<input id="user" type="email" name="email"  class="input" value="<?php if(isset($_COOKIE['Email'])){echo $_COOKIE['Email'];}?>"  placeholder="Enter your Email" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input"  name="pass" data-type="password"  value="<?php if(isset($_COOKIE['Pass'])){ echo $_COOKIE['Pass'];}else{echo "";}?>"placeholder="Enter your password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" name="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="login" class="button" value="Sign In">
				</div>
				<div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
      <div style="color: red;">
	  <?php
	  if(isset($_SESSION['s'])){
		echo $_SESSION['s'];
	unset($_SESSION['s']);
	 }
	 if(isset($_SESSION['ss'])){
		echo $_SESSION['ss'];
	unset($_SESSION['ss']);
	 }
	
	 if(isset($_SESSION['enter'])){
		echo $_SESSION['enter'];
	 unset($_SESSION['enter']);
	 }

	  ?>
      </div>
	 
        
				<div class="hr" ></div>
				<div class="foot" >
					<a style="color:aqua;" href="register.php">Register Here</a>
				    <p>Made by Kashyap </p>

				</div>
			</div>
        </div>
    </div>
</div></div>
</form>


   
  </body>
</html>
