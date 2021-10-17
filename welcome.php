<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
  header("location: login.php");
  exit;
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
    <style>
     .format{
       color: black;
       font-size: xx-large;
       font-family: comic sans ms;
     }
     body {
  background-image: url("img-3.jpg");
  background-repeat: no-repeat;
  background-size:100%;
}
#white
{
  color:white;
  font-size: 70px;
  text-align: center;
  font-family: franklin gothic condensed;
}
.bar 
{
    left: 20px;
}
     
      </style>

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body class="format" id="white">  <!--style="background-image: url('img-3.jpg');">background-image: url('castle.jpg'); background-size: 100%;"-->
    
  
        <p>Hey,&nbsp;<?php echo $_SESSION['username']?>!<br>
        Welcome to Stocks.<br> What would you like to do today?</p>
        <form class="d-flex">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-control me-2" type="search" style="width: 300px; height: 50px;" placeholder="Search for symbol" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" style="width: 100px; height: 50px;">Search</button>
      </form>   
      
<button type="button" class="btn btn-outline-primary" style="width: 150px; height: 60px;" onclick="location.href='index.php'">Explore</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>