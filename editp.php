<?php

include "./connection.php";

if(isset($_POST["ok"])) {
    $id = $_POST['id'];
    $kd_prd = $_POST['kd_prd'];
    $nm_prd = $_POST['nm_prd'];
    $hrg_prd = $_POST['hrg_prd'];

    if( $_FILES['fil']['name'] !=="") {
        $file_name=$_FILES['fil']['name'];
        $file_temp=$_FILES['fil']['tmp_name'];
        $tujuan="./image/";
        $fil=$tujuan.$file_name;

        if(is_dir($tujuan)) {
            move_uploaded_file($file_temp,$fil);
        }else{
            mkdir($tujuan,0777, true);
            move_uploaded_file($file_temp,$fil);
        }
    }

    $update="UPDATE produk SET kd_prd='$kd_prd', nm_prd='$nm_prd', hrg_prd='$hrg_prd', fil='$fil' WHERE id='$id'";
    $con->query($update);
}


if ($con) {
    header ("location: ./produk.php");
}else{
    header ("location: ./edit.php");
}


?>