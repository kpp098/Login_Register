<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>welcome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="login/assets/img/favicon.ico" rel="icon">
  <link href="login/assets/img/apple-touch-icon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="login/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="login/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="login/assets/css/style.css" rel="stylesheet">

  
</head>

<body>
<?php

include "index.php";
$obj = new select();
$name="";
if (isset($_SESSION['name'])) {
    $user = $obj->selectbyid($_SESSION['name']);

    $name = implode('', $user);  
} 
else{
    $name="<h1>Comming Soon......</h1>";
}
if (isset($_POST['back'])) {

   
    setcookie("Email",null,time()-3600,"/");
    setcookie("Pass", null,time()-3600,"/");
    header("location:login.php");

    session_unset();
    session_destroy();
}





?>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1><?php echo $name; ?></h1>
      <h2>We're working hard to improve our website and we'll ready to launch after</h2>
      <div class="countdown d-flex justify-content-center" data-count="2023/12/3">
        <div>
          <h3>%d</h3>
          <h4>Days</h4>
        </div>
        <div>
          <h3>%h</h3>
          <h4>Hours</h4>
        </div>
        <div>
          <h3>%m</h3>
          <h4>Minutes</h4>
        </div>
        <div>
          <h3>%s</h3>
          <h4>Seconds</h4>
        </div>
      </div>
      <form action="" method="POST">
      <input type="submit" class="name" name="back" style="color:aqua;background:none;border:none;
      "value="Log Out">     </form>
  </header>

  

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="login/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="login/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="login/assets/js/main.js"></script>

</body>

</html>