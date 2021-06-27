<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
    <?php  

    include '../../koneksi.php';
    include 'session_check.php';

    $detailbarang = "SELECT * FROM `detail_barang`";
    $distributor = "SELECT * FROM `data_distributor`";
    $printa = mysqli_query($conn, $detailbarang);
    $printb = mysqli_query($conn, $distributor);

    ?>
</head>
<body>
    <div class="containers">
        <a class="back" href="../databarang.php">KEMBALI</a>
        <h3>Tambah Barang</h3>
        <hr>
        <div class="main">
            <form method="post" action="input.php" enctype="multipart/form-data">
                <div class="input">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" placeholder="Input barang disini">
                </div>
                <div class="input">
                    <label>id_Kategori Barang</label>
                    <select name="id_detail_barang">
                    <?php while ($a = mysqli_fetch_array($printa)): ?>
                        <option value="<?php echo $a['id_detail_barang'];?>"><?php echo $a['keterangan_barang'];?></option>
                    <?php endwhile;?>
                    </select>
                </div>          
                <div class="input">
                    <label>id_Distributor Barang</label>
                    <select name="id_distributor">
                    <?php while($b = mysqli_fetch_array($printb)): ?>
                        <option value="<?php echo $b['id_distributor'];?>"><?php echo $b['nama_distributor'];?></option>
                    <?php endwhile;?>
                    </select>
                </div>        
                <div class="input">
                    <label>Harga Jual</label>
                    <input type="text" name="harga_barang" placeholder="Input harga barang disini">
                </div>
                <div class="input">
                    <label>Jumlah Stok</label>
                    <input type="text" name="stok_barang" placeholder="Input stok barang disini">
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</body>
</html>