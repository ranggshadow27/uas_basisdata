<?php
include "../koneksi.php";
include "session_check.php";

//query menampilkan data
$databarang = "SELECT * FROM `data_barang` ORDER BY `data_barang`.`nama_barang` ASC";
$printa = mysqli_query($conn, $databarang);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
    <div class="containers">
        <nav>
            <a href="databarang.php" class="active">Data Barang</a>
            <a href="datapembeli.php">Data Pembeli</a>
            <a href="datadistributor.php">Data Distributor</a>
            <a href="pembelianbarang.php">Data Pembelian Barang</a>
            <a href="detailbarang.php">Detail Barang</a>
        </nav>
            <div id="databarang">
                <header>
                    <h3>DATA BARANG</h3>
                    <h4>User Active :
                        <span class="user_login">
                            <?php echo $_SESSION['username']; ?>
                        </span>|
                        <a class="link" href="../logout.php">Logout</a>
                    </h4>
                </header>
                <div class="main">
                    <table>
                        <tr>
                            <th>Nama Barang</th>
                            <th>id_Detail Barang</th>
                            <th>id_Distributor</th>
                            <th class="mini">Harga Barang</th>
                            <th class="mini">Stok</th>
                            <th>Action</th>
                        </tr>
                <?php while($a = mysqli_fetch_array($printa)): ?>
                        <tr>
                            <td><?= $a['nama_barang'];?></td>
                            <td><?= $a['id_detail_barang'];?></td>
                            <td><?= $a['id_distributor'];?></td>
                            <td>Rp. <?= $a['harga_barang'];?></td>
                            <td><?= $a['stok_barang'];?></td>
                            <td>
                                <a class="edit" href="update/updatepage.php?id=<?php echo $a['id_barang']; ?>">EDIT</a> | 
                                <a class="delete" href="delete.php?id=<?php echo $a['id_barang']; ?>">DELETE</a>
                            </td>
                        </tr>
                <?php endwhile;?>
                    </table>
                    <br><hr><br>
                    <a class="button" href="input/inputpage.php">Tambah Barang</a>
                    <div class="exportnav">
                        <a class="exportbutton" href="export/printpdfbarang.php" target="_blank">Export to <span style="color:#e41d1d">PDF</span></a>
                        <a class="exportbutton" href="export/printxlsbarang.php" target="_blank">Export to <span style="color:green">EXCEL</span></a>
                        <a class="exportbutton" href="log/log_databarang.php">History</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>