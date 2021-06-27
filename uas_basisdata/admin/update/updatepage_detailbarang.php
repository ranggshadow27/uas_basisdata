<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>Update Detail Barang</title>
    <?php

	include '../../koneksi.php';
    include 'session_check.php';

	$id = $_GET['id'];
	$database = mysqli_query($conn,"SELECT * FROM detail_barang WHERE id_detail_barang='$id'");
    $d = mysqli_fetch_array($database);

	?>
</head>
<body>
	<div class="containers">
    <a class="back" href="../detailbarang.php">KEMBALI</a>
    <h3>EDIT DETAIL BARANG</h3>
    <hr>
    	<form method="post" action="update.php">
			<div class="input">
                <input type="hidden" name="id_detail_barang" value="<?php echo $d['id_detail_barang']; ?>">
                <label>Jenis Barang</label>
				<input type="text" name="jenis_barang" value="<?php echo $d['jenis_barang']; ?>">
            </div>
            <div class="input">
                <label>Keterangan Barang</label>
				<input type="text" name="keterangan_barang" value="<?php echo $d['keterangan_barang']; ?>">
            </div>
            <div class="submit">
                <input type="submit" name="submit_detailbarang" value="Update">
            </div>
		</form>
		<?php 
	?>
    </div>
</body>
</html>