<?php
include "../../koneksi.php";
include "../session_check.php";

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
	header("Content-Disposition: attachment; filename=Data_Barang.xls");
	?>
    <div class="containers">
        <div id="databarang">
        <header>
            <center><h2>DATA BARANG</h2></center>
        </header>
            <div class="main">
                <table>
                    <tr>
                        <th>Nama Barang</th>
                        <th>id_Detail Barang</th>
                        <th>id_Distributor</th>
                        <th class="mini">Harga Barang</th>
                        <th class="mini">Stok</th>
                    </tr>
    <?php while($a = mysqli_fetch_array($printa)): ?>
                    <tr>
                        <td><?= $a['nama_barang'];?></td>
                        <td><?= $a['id_detail_barang'];?></td>
                        <td><?= $a['id_distributor'];?></td>
                        <td>Rp. <?= $a['harga_barang'];?></td>
                        <td><?= $a['stok_barang'];?></td>
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