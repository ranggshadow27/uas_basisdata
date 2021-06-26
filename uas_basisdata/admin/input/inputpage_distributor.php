<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Distributor</title>
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
    <?php  
    include '../../koneksi.php';
    include 'session_check.php';
    ?>
</head>
<body>
    <div class="container">
        <a class="back" href="../datamaster.php">KEMBALI</a>
        <h3>Tambah Distributor</h3>
        <hr>
        <div class="main">
            <form method="post" action="input.php" enctype="multipart/form-data">
                <div class="input">
                    <label>Nama Distributor</label>
                    <input type="text" name="nama_distributor" placeholder="Input distributor disini">
                </div>
                <div class="submit">
                    <input type="submit" name="submit_distributor" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</body>
</html>