<?php
include "../../../koneksi.php";
include "../../session_check.php";

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
    <title>Export XLS</title>
    <style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	</style>
</head>
<body>
    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Log_Data_Barang.xls");
	?>
    <div class="containers">
        <div id="databarang">
        <header>
            <center><h2>LOG DATA BARANG</h2></center>
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
                        </tr>
                <?php endwhile;?>
                    </table>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>