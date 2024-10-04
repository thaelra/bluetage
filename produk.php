<?php

include "./connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c2208beb71.js" crossorigin="anonymous"></script>
    <title>Bluetage</title>
</head>
<body>

<!-- Starts Navbar -->

<header>
  <input type="checkbox" name="toggler" id="toggler">
  <label for="toggler" class="fas fa-bars"></label>
      <a href="#" class="logo">Bluetage</a>
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

<!-- Starts Input Product Section -->
<section class="input-product">
    <form action = "<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
     <div class="form1">  
     <div class="wrapper-produk">
     <h1 class="judul-form">INPUT PRODUK</h1>
    <div class="input-produk-field">
      <label for="kd_prd" class="p-label">Kode Produk</label><br>
      <input type="text" id="kd_prd" name="kd_prd" class="p-input" required>
    </div>
    <div class="input-produk-field">
    <label for="nm_prd" class="p-label">Nama Produk</label><br>
    <input type="text" id="nm_prd" name="nm_prd" class="p-input" required>
</div>
<div class="input-produk-field">
    <label for="hrg_prd" class="p-label">Harga Produk</label><br>
    <input type="text" id="hrg_prd" name="hrg_prd" class="p-input" required>
</div>
    <div class="input-produk-field">
    <label for="fil" class="p-label">Gambar</label>
    <input type="file" id="fil" name="fil">
</div>
    <center><input type="submit" id="ok" name="ok" value="save" class="produk-submit"></center>
     </div>
     </div>
</form>
<?php
if((isset ($_POST ["ok"]))){
$kd_prd = $_POST ['kd_prd'];
$nm_prd = $_POST['nm_prd'];
$hrg_prd = $_POST['hrg_prd'];

$file_name = $_FILES['fil']['name'];
$file_temp = $_FILES['fil']['tmp_name'];
$tujuan = "./image/";
$fil = $tujuan.$file_name;

if ($tujuan){
    move_uploaded_file($file_temp,$fil);
}

$simpan = "INSERT IGNORE INTO produk (kd_prd,nm_prd,hrg_prd,fil) VALUES ('$kd_prd','$nm_prd','$hrg_prd','$fil')";
$con->query($simpan);                                                                                     
}
?>

<?php
    $produk = "SELECT * FROM produk";
    $tampilproduk = $con->query($produk);
    $tampilproduk->setFetchMode(PDO::FETCH_ASSOC);
    $daftarproduk = $tampilproduk->FetchAll();
?>
</section>
<!-- Ends Input Daftar Section -->

<!-- STARTS SECTION DAFTAR PRODUK -->
<section class="daftar-produk">
<center>
<h1 class="heading">Daftar Produk</h1>
<br>
<table class="form2" border="1">
<tr>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Harga Produk</th>
    <th>Gambar Produk</th>
    <th colspan="2">Edit & Delete</th>
</tr>
<?php
$produk = "SELECT * FROM produk";
$tampilproduk=$con->query($produk);
$tampilproduk->setFetchMode(PDO::FETCH_ASSOC);
$daftarproduk=$tampilproduk->fetchAll();

foreach ($daftarproduk as $row) {
?>

<tr>
    <td><?=$row['kd_prd'];?></td>
    <td><?=$row['nm_prd'];?></td>
    <td><?=$row['hrg_prd'];?></td>
    <td><img src="<?=$row['fil'];?>" width='150' height='150'></td>
    <td><a href="./edit.php?kd_prd=<?=$row['kd_prd'];?>"target ="_self">Edit</a></td>
    <td><a href="./del.php?kd_prd=<?=$row['kd_prd'];?>"target ="_self">Delete</a></td>
</tr>
<?php
}
?>
</center>
</table>
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
</div> 


</body>
</html>