<?php
  require 'index.php';
  

  $obj=new db();
      if(isset($_POST["register"]))
        {
          $query =  $obj->insert($_POST["name"],$_POST["email"],$_POST["pass"]);  
        }

      if(isset($_POST["login"]))  
        {
          header("location:login.php") ;       
        }


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Register</title>
  </head>
  <body>
    

    <form method="POST" >
    <div class ="row">
	<div class="col-md-6 mx-auto p-0" style="background:url(login/assets/img/bg.jpg) top center repeat;margin-right:-1%;">
		<div class="card">
<div class="login-box">
	<div class="login-snip">
		<input id="tab-2" type="radio" name="tab" class="sign-in" checked><label for="tab-2" style="margin-left: 30%;" class="tab">Register</label>
		<input id="tab-1" type="radio" name="tab" class="sign-up"><label for="tab-1" class="tab"></label>
		<div class="login-space">
			<div class="login">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text"  name = "name" class="input" placeholder="Create your Username" required>
				</div>
        <div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email" name="email" class="input" placeholder="Enter your email address" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="pass" placeholder="Create your password" required>
				</div>
				
				<div class="group">
					<input type="submit" href="register.php" name="register" class="button" value="Sign Up">
				</div>
				<div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
      <div style="color: red;">
        <?php
		
		 
		 if(isset($_SESSION['already'])){
			echo $_SESSION['already'];
		unset($_SESSION['already']);
		 }
		 if(isset($_SESSION['s'])){
			 echo $_SESSION['s'];
			 unset($_SESSION['s']);}
				

		?>
      </div>
    </div>
				<div class="hr"></div>
				<div class="foot">
					<a style="color:aqua;" href="login.php">Login Here</a>
					<p style="margin-top:15%;">Made by Kashyap </p>
				</div>
			</div>

   
	</div>
</div>   
</div>
</div>
</div>
  </body>
</html>
