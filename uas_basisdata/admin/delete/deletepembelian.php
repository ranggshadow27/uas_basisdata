<?php
include '../../koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM data_pembelian_barang WHERE id_pembelian_barang='$id'");


header('location: ../datapembelianbarang.php');

?>