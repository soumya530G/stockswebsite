<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
  $loggedin = true;
}
else
{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/soumya/form">
    <h2 class="logo">
            STOCKS
          </h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/soumya/form/welcome.php" style="font-size:larger">Home</a>
        </li>';
      if(!$loggedin)
      {
          echo '<li class="nav-item">
          <a class="nav-link" href="/soumya/form/login.php" style="color:white; font-size:larger">Login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/soumya/form/signup.php" style="color:white;font-size:larger;">Sign up</a>
          </li>';
      }
      if($loggedin)   
      { 
            echo '<li class="nav-item">
            <a class="nav-link" href="/soumya/form/logout.php" style="color:white;font-size:larger;">Logout</a>
            </li>';
      }
       echo  '</ul>
      
    </div>
  </div>
</nav>';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .logo {
  color: var(--color-txt);
  font-size: 2rem;
  font-weight: 900;
}
.logo i {
  color: green;
}
.fixed {
  position: fixed;
  bottom: -3.5px;
  right: 15px;
  align: center;
  width: 641px;
  height: 220px;
  border: none;
}
.fixed-1 {
  position: fixed;
  bottom: 0;
  left: 15px;
  align: center;
  width: 700px;
  height: 220px;
  border: none;
}

      </style>
  </head>
  <body >
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <img src="img-2.png" width=100px; height=100px; class="fixed">
    <img src="img-2.png" width=100px; height=100px; class="fixed-1">
    
  </body>
</html>