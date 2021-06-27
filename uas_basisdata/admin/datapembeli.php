<?php
include "../koneksi.php";
include "session_check.php";

//query menampilkan data
$datapembeli = "SELECT * FROM `data_pembeli` ORDER BY `data_pembeli`.`id_pembeli` ASC";

$printb = mysqli_query($conn, $datapembeli);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
    <div class="containers">
        <nav>
            <a href="databarang.php">Data Barang</a>
            <a href="datapembeli.php" class="active">Data Pembeli</a>
            <a href="datadistributor.php">Data Distributor</a>
            <a href="datapembelianbarang.php">Data Pembelian Barang</a>
            <a href="detailbarang.php">Detail Barang</a>
        </nav>
        <div id="datapembeli">
            <header>
                <h3>DATA PEMBELI</h3>
                <h4>User Active :
                    <span class="user_login">
                        <?php echo $_SESSION['username']; ?>
                    </span> |
                    <a class="link" href="../logout.php">Logout</a>
                </h4>
            </header>
            <div class="main">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Nama Pembeli</th>
                        <th>Tanggal Pembelian</th>
                        <th>id_Barang</th>
                        <th class="mini">Jumlah Transaksi</th>
                        <th class="mini">Jumlah Uang Kembali</th>
                        <th>Action</th>
                    </tr>
                <?php while($b = mysqli_fetch_array($printb)): ?>
                    <tr>
                        <td><?= $b['id_pembeli'];?></td>
                        <td><?= $b['nama_pembeli'];?></td>
                        <td><?= $b['tgl_transaksi_pembelian'];?></td>
                        <td><?= $b['id_barang'];?></td>
                        <td>Rp. <?= $b['jumlah_transaksi'];?></td>
                        <td>Rp. <?= $b['jumlah_uang_kembali'];?></td>
                        <td>
                            <a class="edit" href="update/updatepage_pembeli.php?id=<?php echo $b['id_pembeli']; ?>">EDIT</a> | 
                            <a class="delete" href="delete/deletepembeli.php?id=<?php echo $b['id_pembeli']; ?>">DELETE</a>
                        </td>
                    </tr>
                <?php endwhile;?>
                </table>
                <br><hr><br>
                <a class="button" href="input/inputpage_pembeli.php">Tambah Pembeli</a>
                <div class="exportnav">
                    <a class="exportbutton" href="#databarang">Export to <span style="color:#e41d1d">PDF</span></a>
                    <a class="exportbutton" href="print.php" target="_blank">Export to <span style="color:green">EXCEL</span></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>