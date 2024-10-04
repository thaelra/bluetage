<?php

require "./connection.php";

$userm = $_POST['userm'];
$pass = $_POST['pass'];

if ((isset($_POST['ok']))){

if($userm == "elsa" && $pass == "123"){
    header ("location: ./produk.php");
}

if($userm != "elsa" || $pass != "123"){
    header ("location: ./index.php");
}
else{
$sql= "SELECT * FROM user WHERE pass = '$pass' AND userm like '%$userm%'";
$sqllogin=$con->query($sql);
$sqllogin->setFetchMode(PDO::FETCH_ASSOC);
$login=$sqllogin->fetchAll();

foreach ($login as $log){
    if ($login) {
        session_start();
        $_SESSION["userm"]=$log["userm"];
        $_SESSION["pass"]=$log["pass"];
        $_SESSION["id"]=$log["id"];
        header ("location: ./bluetage.php");
    }else{
        header ("location: ./home.php");
    }
  }
 } 
}
?>