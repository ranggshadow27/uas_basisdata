<?php
include "../../koneksi.php";
include "../session_check.php";

//query menampilkan data
$databarang = "SELECT * FROM `log_databarang` ORDER BY `log_databarang`.`id_logbarang` ASC";
$printa = mysqli_query($conn, $databarang);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Data Barang</title>
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
</head>
<body>
    <div class="container">
            <div id="databarang">
            <a class="back" href="../databarang.php">KEMBALI</a>
                <header>
                    <h3>DATA BARANG</h3>
                    <h4>User Active :
                        <span class="user_login">
                            <?php echo $_SESSION['username']; ?>
                        </span>|
                        <a class="back" href="../../logout.php">LOGOUT</a>
                    </h4>
                </header>
                <div class="main">
                    <table>
                        <tr>
                            <th>id Log</th>
                            <th>Nama (Lama)</th>
                            <th>Nama (Baru)</th>
                            <th>Harga (Lama)</th>
                            <th>Harga (Baru)</th>
                            <th>Stok (Lama)</th>
                            <th>Stok (Baru)</th>
                            <th>Waktu</th>
                            <th>Action</th>
                        </tr>
                <?php while($a = mysqli_fetch_array($printa)): ?>
                        <tr>
                            <td><?= $a['id_logbarang'];?></td>
                            <td><?= $a['nama_lama'];?></td>
                            <td><?= $a['nama_baru'];?></td>
                            <td>Rp. <?= $a['harga_lama'];?></td>
                            <td>Rp. <?= $a['harga_baru'];?></td>
                            <td><?= $a['stok_lama'];?></td>
                            <td><?= $a['stok_baru'];?></td>
                            <td><?= $a['waktu_perubahan'];?></td>
                            <td>
                                <a class="delete" href="deletelogbarang.php?id=<?php echo $a['id_logbarang']; ?>">DELETE</a>
                            </td>
                        </tr>
                <?php endwhile;?>
                    </table>
                    <br><hr><br>
                    <div class="exportnav">
                        <a class="exportbutton" href="../export/log/printpdflogbarang.php" target="_blank">Export to <span style="color:#e41d1d">PDF</span></a>
                        <a class="exportbutton" href="../export/log/printxlslogbarang.php" target="_blank">Export to <span style="color:green">EXCEL</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>