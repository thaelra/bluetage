<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bluetop";

    $con = new PDO ("mysql: localhost=$host; dbname=$dbname", $username, $password);

    if($con){
        $user = "CREATE TABLE IF NOT EXISTS user (
            id int not null auto_increment primary key,
            nama text (100) not null,
            telp text (100) not null,
            tgl date,
            alamat text (100) not null,
            userm text (100) not null unique,
            pass text (100) not null
        )";

        $con->query($user);

        $produk = "CREATE TABLE IF NOT EXISTS produk (
            id int not null auto_increment primary key,
            kd_prd text (100) not null unique,
            nm_prd text (100) not null,
            hrg_prd text (100) not null, 
            fil text (10) not null
        )";

        $con->query($produk);
    }

?>