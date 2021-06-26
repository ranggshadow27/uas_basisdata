<?php
include "../koneksi.php";
include "session_check.php";

//query menampilkan data
$datapembelian = "SELECT * FROM `data_pembelian_barang` ORDER BY `data_pembelian_barang`.`id_pembelian_barang` ASC";

$printb = mysqli_query($conn, $datapembelian);

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
            <a href="datapembeli.php">Data Pembeli</a>
            <a href="datadistributor.php">Data Distributor</a>
            <a href="datapembelianbarang.php" class="active">Data Pembelian Barang</a>
            <a href="detailbarang.php">Detail Barang</a>
        </nav>
        <div id="datapembeli">
            <header>
                <h3>DATA PEMBELIAN BARANG</h3>
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
                        <th>id Pembelian Barang</th>
                        <th>id Distributor</th>
                        <th>Tgl Transaksi</th>
                        <th>Total Transaksi</th>
                        <th>Action</th>
                    </tr>
                <?php while($b = mysqli_fetch_array($printb)): ?>
                    <tr>
                        <td><?= $b['id_pembelian_barang'];?></td>
                        <td><?= $b['id_distributor'];?></td>
                        <td><?= $b['tgl_transaksi_pembelian'];?></td>
                        <td>Rp. <?= $b['total_transaksi'];?></td>
                        <td>
                            <a class="edit" href="update/updatepage_pembelian.php?id=<?php echo $b['id_pembelian_barang']; ?>">EDIT</a> | 
                            <a class="delete" href="delete.php?id=<?php echo $b['id_pembelian_barang']; ?>">DELETE</a>
                        </td>
                    </tr>
                <?php endwhile;?>
                </table>
                <br><hr><br>
                <a class="button" href="input/inputpage_pembelian.php">Tambah Pembelian Barang</a>
                <div class="exportnav">
                    <a class="exportbutton" href="#databarang">Export to <span style="color:#e41d1d">PDF</span></a>
                    <a class="exportbutton" href="print.php" target="_blank">Export to <span style="color:green">EXCEL</span></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>