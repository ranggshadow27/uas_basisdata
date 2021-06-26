<?php

include "../koneksi.php";
include "session_check.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
    <header>
        <center>
        <h2 class="h2datamaster">DATA MASTER</h2>
        <h4 class="h4datamaster">Selamat datang, 
            <span class="user_login">
                <?php echo $_SESSION['username']; ?>
            </span>!
        </h4>
        </center>
    </header>
    <div class="datamastercontainer">
    <nav class="navdatamaster">
        <a class="buttondatamaster" href="databarang.php">Data Barang</a>
        <a class="buttondatamaster" href="datapembeli.php">Data Pembeli</a>
        <a class="buttondatamaster" href="datadistributor.php">Data Distributor</a>
        <a class="buttondatamaster" href="datapembelianbarang.php">Data Pembelian Barang</a>
        <a class="buttondatamaster" href="detailbarang.php">Detail Barang</a>
        <a class="buttonlogout" href="../logout.php">Logout</a>
    </nav>
    </div>
</body>
</html>