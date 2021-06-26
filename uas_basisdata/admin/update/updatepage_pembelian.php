<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>Update Data Pembelian</title>
    <?php

	include '../../koneksi.php';
    include 'session_check.php';

	$id = $_GET['id'];
	$datapembelian = mysqli_query($conn,"SELECT * FROM data_pembelian_barang WHERE id_pembelian_barang='$id'");
    $d = mysqli_fetch_array($datapembelian);

    $datadistributor = mysqli_query($conn,"SELECT * FROM data_distributor");

	?>

</head>
<body>
	<div class="container">
    <a class="back" href="../datamaster.php">KEMBALI</a>
    <h3>EDIT DATA PEMBELIAN</h3>
    <hr>
    	<form method="post" action="update.php">
			<div class="input">
                <input type="hidden" name="id_pembelian_barang" value="<?php echo $d['id_pembelian_barang']; ?>">
            </div>
            <div class="input">
                <label>id Distributor</label>
                <select name="id_distributor">
                <?php while ($b = mysqli_fetch_array($datadistributor)): ?>
                    <option value="<?php echo $b['id_distributor'];?>"><?php echo $b['nama_distributor'];?></option>
                <?php endwhile;?>
                </select>
            </div>
            <div class="input">
                <label>Tanggal Transaksi</label>
				<input type="text" name="tgl_transaksi_pembelian" value="<?php echo $d['tgl_transaksi_pembelian']; ?>">
            </div>
            <div class="input">
                <label>Total Transaksi</label>
				<input type="text" name="total_transaksi" value="<?php echo $d['total_transaksi']; ?>">
            </div>
            <div class="submit">
                <input type="submit" name="submit_pembelian" value="Update">
            </div>
		</form>
		<?php 
	?>
    </div>
</body>
</html>