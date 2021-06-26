<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>Update Data Distributor</title>
    <?php

	include '../../koneksi.php';
    include 'session_check.php';

	$id = $_GET['id'];
	$database = mysqli_query($conn,"SELECT * FROM data_distributor WHERE id_distributor='$id'");
    $d = mysqli_fetch_array($database);

	?>
</head>
<body>
	<div class="container">
    <a class="back" href="../datamaster.php">KEMBALI</a>
    <h3>EDIT DATA PEMBELI</h3>
    <hr>
    	<form method="post" action="update.php">
			<div class="input">
                <input type="hidden" name="id_distributor" value="<?php echo $d['id_distributor']; ?>">
                <label>Nama Distributor</label>
				<input type="text" name="nama_distributor" value="<?php echo $d['nama_distributor']; ?>">
            </div>
            <div class="submit">
                <input type="submit" name="submit_distributor" value="Update">
            </div>
		</form>
		<?php 
	?>
    </div>
</body>
</html>