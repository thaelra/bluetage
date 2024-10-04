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
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <input type="checkbox" name="toggler" id="toggler">
  <label for="toggler" class="fas fa-bars"></label>
        <a href="bluetage.php" class="logo">Bluetage</a>
        <div class="header-search-bar">
      <form action="./caribluetage.php" method="post">
        <div class="search-input-field">
            <input type="search" name="cari" class="p-cari-input" placeholder="Search the product here" required>
            <input type="submit" name="scari" id="scari" class="search-bar" value="Search">
        </div>
        </form>
    </div>
    <div class="navbar">
          <a href="index.php">logout</a>
      </div>
    </header>
    <!-- starts header shop -->
   <!-- Slider -->

    <section class="user-home">
        <div class="all-user-box">
  <div class="user-sec-container">
    <div class="user-wrapper">
        <img src="image/header-shop.png" width="100%">
        <img src="image/header-shop-2.png" width="100%">
        <img src="image/header-shop-3.png" width="100%">
        <img src="image/header-shop-4.png" width="100%">
    </div>
</div>
</div>
    </section>
    <!-- ends header shop -->

    <!-- starts products -->
    <section class="user-our-products">
        <h1 class="heading">Our <span>Products</span></h1>
        <div class="user-our-box-container">
            <?php
        $produk = "SELECT * FROM produk";
        $tampilproduk = $con->query($produk);
        $tampilproduk->setFetchMode(PDO::FETCH_ASSOC);
        $daftarproduk = $tampilproduk->FetchAll();
        foreach ($daftarproduk as $row) {
        ?>
        <div class="user-our-box">
            <div class="user-our-image">
                <img src="<?=$row['fil']; ?>" width='100' height='100'>
            </div>
            <div class="user-price">
                <h4><?=$row['nm_prd']; ?></h4>
                <p>Rp.<?=$row['hrg_prd']; ?>,00</p>
            </div>
            </div>
                <?php
                }
                ?>
            </div>
        </section>

    <!-- ends products -->

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