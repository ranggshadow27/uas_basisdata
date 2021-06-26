<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>Update Barang</title>
    <?php

	include '../../koneksi.php';
    include 'session_check.php';

	$id = $_GET['id'];
	$database = mysqli_query($conn,"SELECT * FROM data_barang WHERE id_barang='$id'");
    $d = mysqli_fetch_array($database);

    $detailbarang = "SELECT * FROM `detail_barang`";
    $distributor = "SELECT * FROM `data_distributor`";
    $printa = mysqli_query($conn, $detailbarang);
    $printb = mysqli_query($conn, $distributor);
        
	?>
</head>
<body>
	<div class="container">
    <a class="back" href="../datamaster.php">KEMBALI</a>
    <h3>EDIT DATA BARANG</h3>
    <hr>
    	<form method="post" action="update.php">
			<div class="input">
                <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">
                <label>Nama Barang</label>
				<input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
            </div>
			<div class="input">
                <label>id_Detail Barang</label>
                <select name="id_detail_barang">
                <?php while ($a = mysqli_fetch_array($printa)): ?>
                    <option value="<?php echo $a['id_detail_barang'];?>"><?php echo $a['keterangan_barang'];?></option>
                <?php endwhile;?>
                </select>
            </div>
            <div class="input">
                <label>Detail Barang</label>
                <select name="id_distributor">
                <?php while($b = mysqli_fetch_array($printb)): ?>
                    <option value="<?php echo $b['id_distributor'];?>"><?php echo $b['nama_distributor'];?></option>
                <?php endwhile;?>
                </select>
            </div>
            <div class="input">
                <label>Harga Barang</label>
                <input type="text" name="harga_barang" value="<?php echo $d['harga_barang']; ?>">
            </div>
            <div class="input">
                <label>Stok</label>
                <input type="text" name="stok_barang" value="<?php echo $d['stok_barang']; ?>">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Update">
            </div>
		</form>
		<?php 
	?>
    </div>
</body>
</html>