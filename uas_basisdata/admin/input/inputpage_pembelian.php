<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembelian Barang</title>
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
    <?php  

    include '../../koneksi.php';
    include 'session_check.php';

    $databarang = "SELECT * FROM `data_barang` ORDER BY `data_barang`.`nama_barang` ASC";
    $datadistributor = "SELECT * FROM `data_distributor` ORDER BY `data_distributor`.`nama_distributor` ASC";
    $printa = mysqli_query($conn, $databarang);
    $printb = mysqli_query($conn, $datadistributor);

    ?>
</head>
<body>
    <div class="containers">
        <a class="back" href="../datapembelianbarang.php">KEMBALI</a>
        <h3>Tambah Pembelian Barang</h3>
        <hr>
        <div class="main">
            <form method="post" action="input.php" enctype="multipart/form-data">
                <div class="input">
                    <label>id Distributor</label>
                    <select name="id_distributor">
                    <?php while($b = mysqli_fetch_array($printb)): ?>
                        <option value="<?php echo $b['id_distributor'];?>"><?php echo $b['nama_distributor'];?></option>
                    <?php endwhile;?>
                    </select>
                </div>
                <div class="input">
                    <label>Tanggal Pembelian</label>
                    <input type="text" name="tgl_transaksi_pembelian" placeholder="ex : Y - M - D">
                </div>          
                <div class="input">
                    <label>Total Transaksi</label>
                    <input type="text" name="total_transaksi" placeholder="Input uang pembayaran disini">
                </div>
                <div class="submit">
                    <input type="submit" name="submit_pembelian" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</body>
</html>