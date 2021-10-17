<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include 'partials/_dbconnect.php';
  $username =  $_POST["username"];
  $password =  $_POST["password"];
  $cpassword =  $_POST["cpassword"];
 // $exists = false;
 $existSql = "SELECT * FROM `users` WHERE username = '$username'";
 $result = mysqli_query($conn, $existSql);
 $numExistRows = mysqli_num_rows($result);
 if($numExistRows > 0)
 {
    //$exists = true;
    $showError = "username is taken";
 }
 else
 { 
  //$exists = false;
 
  if(($password == $cpassword))
  {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
      $showAlert = true;
    }
  }
  else
  {
    $showError = "Passwords do not match";
  }
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Sign up</title>
    <style>
      .container{
        position: absolute;
  right: -135px;
  width: 300px;
      }
      </style>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Hurray!</strong> Your account has been created<strong>&nbsp;Login now!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    if($showError){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>uh-oh!&nbsp;</strong>'. $showError .'
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
    <div class="container">
        <h1 class="text" style="font-family:Palatino Linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;𝐒𝐢𝐠𝐧 𝐮𝐩 𝐭𝐨 𝐒𝐓𝐎𝐂𝐊𝐒</h1>
        <form action="/soumya/form/signup.php" method="post">
        
  <div class="form-group col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" maxlength="23" class="form-control" id="password" name="password">
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure you type the same password</div>
  </div>
  <button type="submit" class="btn btn-primary col-md-6">Sign up</button>
</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>