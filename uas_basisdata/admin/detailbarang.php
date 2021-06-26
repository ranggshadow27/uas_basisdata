<?php
include "../koneksi.php";
include "session_check.php";

//query menampilkan data
$detailbarang = "SELECT * FROM `detail_barang` ORDER BY `detail_barang`.`id_detail_barang` ASC ";

$printc = mysqli_query($conn, $detailbarang);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
    <div class="containers">
        <nav>
            <a href="databarang.php">Data Barang</a>
            <a href="datapembeli.php">Data Pembeli</a>
            <a href="datadistributor.php">Data Distributor</a>
            <a href="datapembelianbarang.php">Data Pembelian Barang</a>
            <a href="detailbarang.php" class="active">Detail Barang</a>
        </nav>
        <div id="datadistributor">
            <header>
                <h3>DETAIL BARANG</h3>
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
                        <th>id Detail Barang</th>
                        <th>Jenis Barang</th>
                        <th>Keterangan Barang</th>
                        <th>Action</th>
                    </tr>
                <?php while($c = mysqli_fetch_array($printc)): ?>
                    <tr>
                        <td><?= $c['id_detail_barang'];?></td>
                        <td><?= $c['jenis_barang'];?></td>
                        <td><?= $c['keterangan_barang'];?></td>
                        <td>
                            <a class="edit" href="update/updatepage_detailbarang.php?id=<?php echo $c['id_detail_barang']; ?>">EDIT</a> | 
                            <a class="delete" href="delete.php?id=<?php echo $c['id_detail_barang']; ?>">DELETE</a>
                        </td>
                    </tr>
                <?php endwhile;?>
                </table>
                <br><hr><br>
                <a class="button" href="input/inputpage_detailbarang.php">Tambah Detail Barang</a>
                <div class="exportnav">
                    <a class="exportbutton" href="#databarang">Export to <span style="color:#e41d1d">PDF</span></a>
                    <a class="exportbutton" href="print.php" target="_blank">Export to <span style="color:green">EXCEL</span></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>