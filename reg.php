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
<header>
  <input type="checkbox" name="" id="toggler">
  <label for="toggler" class="fas fa-bars"></label>
      <a href="index.php" class="logo">Bluetage</a>
      <div class="navbar">
          <a href="home.php">Login</a>
      </div>
</header>
  <div class="reg-body">
<section class="rcontainer">
  <h4 class="reg-h4">Register</h4>
    <div class="rbox">
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="form"> 
    <div class="input-box">
          <label>Full Name</label>
          <input type="text" id="nama" name="nama" placeholder="Enter full name" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" id="telp" name="telp" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" id="tgl" name="tgl" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="input-box">
            <label> Address</label>
            <input type="text" id="alamat" name="alamat" placeholder="Enter address" required />
          </div>
          <div class="input-box">
            <label>Username</label>
            <input type="text" id="usernm" name="userm" placeholder="Enter username" required />
          </div>
          <div class="input-box">
            <label>Password</label>
            <input type="password" id="pass" name="pass" placeholder="Enter password" required />
          </div>
      <input type="submit" id="ok" name="ok" value="submit" class="reg-submit">

      <div class="rlogin">
        <p>Already have an account? <a href="home.php">Login</a></p>
      </div>
    </div>
    </form>

    <?php
    if ((isset ($_POST ["ok"]))){
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $userm = $_POST['userm'];
    $pass = $_POST['pass'];

    $simpan = "INSERT IGNORE INTO user (nama, telp, tgl, alamat, userm, pass) VALUES ('$nama' , '$telp' , '$tgl' , '$alamat', '$userm' , '$pass') ;";
    $con->query($simpan);

    if ($con) {
        header("location: ./home.php");
    }
    }  
    ?>
</section>
</div>

<br><br>
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
 </body>
 </html>