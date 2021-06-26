<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembeli</title>
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
    <?php  

    include '../../koneksi.php';
    include 'session_check.php';

    $databarang = "SELECT * FROM `data_barang` ORDER BY `data_barang`.`nama_barang` ASC";
    $printa = mysqli_query($conn, $databarang);

    ?>
</head>
<body>
    <div class="container">
        <a class="back" href="../datamaster.php">KEMBALI</a>
        <h3>Tambah Pembeli</h3>
        <hr>
        <div class="main">
            <form method="post" action="input.php" enctype="multipart/form-data">
                <div class="input">
                    <label>Nama Pembeli</label>
                    <input type="text" name="nama_pembeli" placeholder="Input nama pembeli disini">
                </div>
                <div class="input">
                    <label>Tanggal Pembelian</label>
                    <input type="text" name="tgl_transaksi_pembelian" placeholder="ex : Y - M - D">
                </div>
            
                <div class="input">
                    <label>Barang yang dibeli</label>
                    <select name="id_barang">
                    <?php while($a = mysqli_fetch_array($printa)): ?>
                        <option value="<?php echo $a['id_barang'];?>"><?php echo $a['nama_barang'];?></option>
                    <?php endwhile;?>
                    </select>
                </div>
                <div class="input">
                    <label>Jumlah Transaksi</label>
                    <input type="text" name="jumlah_transaksi" placeholder="Input uang pembayaran disini">
                </div>
                <div class="input">
                    <label>Uang Kembali</label>
                    <input type="text" name="jumlah_uang_kembali" placeholder="Input uang kembali disini">
                </div>
                <div class="submit">
                    <input type="submit" name="submit_pembeli" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</body>
</html>