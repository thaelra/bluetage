<?php

include "./connection.php";

$kd_prd = $_GET["kd_prd"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluetage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <input type="checkbox" name="toggler" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">Bluetage</a>
        <div class="header-search-bar">
      </div>
  </header>
  <section class="edit">
    <div class="form1">  
    <?php
    $tampil = "SELECT * FROM produk WHERE kd_prd = '$kd_prd'";
    $tampilproduk= $con->query($tampil); 
    $tampilproduk->setFetchMode(PDO :: FETCH_ASSOC);
    $editproduk = $tampilproduk->fetchAll();

    foreach ($editproduk as $row){
    ?> 

    <form action = "./editp.php" method="post" enctype="multipart/form-data">
        <div class="wrapper-produk">
    <h1 class="judul-form">EDIT PRODUK</h1>

    <input type="text" id="id" name="id" required value="<?=$row['id'];?>"hidden>

    <div class="input-produk-field">
    <label for="kd_prd">Kode Produk</label>
    <input type="text" id="kd_prd" name="kd_prd" required value="<?=$row['kd_prd'];?>">
    </div>

    <div class="input-produk-field">
    <label for="nm_prd">Nama Produk</label>
    <input type="text" id="nm_prd" name="nm_prd" required value="<?=$row['nm_prd'];?>">
    </div>

    <div class="input-produk-field">
    <label for="hrg_prd">Harga Produk</label>
    <input type="number" id="hrg_prd" name="hrg_prd" required value="<?=$row['hrg_prd'];?>">
    </div>

    <div class="input-produk-field">
    <label for="fil">Gambar</label>
    <input type="file" id="fil" name="fil" required value="<?=$row['fil'];?>">
   </div>

   <div class="edit-submit">
    <a href="produk.php" class="produk-edit-submit-cancel">Cancel</a>
    <input type="submit" id="ok" name="ok" value="Update" class="produk-edit-submit">
</div>

    </form>
    </table> 
<?php
    }
    ?>
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
</div>
</body>
</html>