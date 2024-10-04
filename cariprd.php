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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Starts Navbar -->
<header>
  <input type="checkbox" name="toggler" id="toggler">
  <label for="toggler" class="fas fa-bars"></label>
      <a href="index.php" class="logo">Bluetage</a>
      <div class="header-search-bar">
      <form action="./cariprd.php" method="post">
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
<!-- ends navbar -->
<section class="search-section">
    <h1 class="h1-search">Here's Your Search</h1>
<table class="form3" border="1">
<tr>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Harga Produk</th>
    <th>Gambar Produk</th>
    <th colspan="2">Edit & Delete</th>
</tr>
<?php
    if(isset($_POST['scari'])){
        $cari_input=$_POST['cari'];

        $carii = "SELECT * FROM produk WHERE nm_prd like '%$cari_input%' OR kd_prd like '%$cari_input%'";
        $cariproduk1= $con->query($carii);
        $cariproduk1->setFetchMode(PDO::FETCH_ASSOC);
        $daftarcari1=$cariproduk1->fetchAll();
    foreach($daftarcari1 as $row1){
?>
<tr>
    <td><?=$row1['kd_prd'];?></td>
    <td><?=$row1['nm_prd'];?></td>
    <td><?=$row1['hrg_prd'];?></td>
    <td><img src="<?=$row1['fil'];?>" width='100' height='100'></td>
    <td><a href="./edit.php?kd_prd=<?=$row1['kd_prd'];?>"target ="_self">Edit</a></td>
    <td><a href="./del.php?kd_prd=<?=$row1['kd_prd'];?>"target ="_self">Delete</a></td>
</tr>
    <?php
    }
}
    ?>
</table>
<div class="button-back">
    <a href="produk.php"><i class="fa-solid fa-arrow-left"></i> Back To Previous Page</a>
</div>
</section>

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