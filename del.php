<?php

include "./connection.php";

$kd_prd = $_GET['kd_prd'];

$hapusSQL = "DELETE FROM produk WHERE kd_prd='$kd_prd'";
$con->query($hapusSQL);

if ($con) {
    header ('location: ./produk.php');
}
?>