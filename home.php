<?php
include "./connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluetage</title>
    <script src="https://kit.fontawesome.com/c2208beb71.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- starts navbar -->
<header>
  <input type="checkbox" name="" id="toggler">
  <label for="toggler" class="fas fa-bars"></label>
      <a href="index.php" class="logo">Bluetage</a>
      <div class="navbar">
          <a href="reg.php">Register</a>
      </div>
</header>
<!-- ends navbar -->

<!-- starts login form -->
<section class="all-login">
  <div class="all-login-2">
  <div class="login-img">
    <img src="image/img-login.png">
  </div>
  <div class="wrapper-login">
    <h2>Login</h2>
    <form action="./login.php" method="post">
        <div class="input-field">
        <input type="text" id="userm" name="userm" required>
        <label>Enter your username</label>
        </div>
        <div class="input-field">
        <input type="password" id="pass" name="pass" required>
        <label>Enter your password</label>
        </div>
        
      <input type="submit" id="ok" name="ok" value="Login" class="slogin">
      <div class="register">
        <p>Don't have an account? <a href="reg.php">Register</a></p>
      </div>
    </form>
  </div>
</div>
</section>
<!-- ends login form -->

<!-- starts footer -->
<footer>
  <div class="footerContainer">
      <div class="socialIcons">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-google-plus"></i></a>
          <a href=""><i class="fa-brands fa-youtube"></i></a>
      </div>
      <div class="footerNav">
          <ul><li><a href="index.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#product">Product</a></li>
              <li><a href="#contact">Contact us</a></li>
          </ul>
      </div>

  </div>
  <div class="footerBottom">
      <p>Copyright &copy;2024; Designed by <span class="designer">BLUETAGE</span></p>
  </div>
</footer>
<!-- ends footer -->

</body>
</html>