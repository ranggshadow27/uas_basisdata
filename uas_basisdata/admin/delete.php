<?php
include '../koneksi.php';

$id = $_GET['id'];
$barang = "DELETE FROM data_barang WHERE id_barang='$id'";
$pembeli = "DELETE FROM data_pembeli WHERE id_pembeli='$id'";
$distributor = "DELETE FROM data_distributor WHERE id_distributor='$id'";
$pembelian = "DELETE FROM data_pembelian_barang WHERE id_pembelian_barang='$id'";
$detailbarang = "DELETE FROM detail_barang WHERE id_detail_barang='$id'";

mysqli_query($conn, $barang);
mysqli_query($conn, $pembeli);
mysqli_query($conn, $distributor);
mysqli_query($conn, $pembelian);
mysqli_query($conn, $detailbarang);

header('location: datamaster.php');

?>