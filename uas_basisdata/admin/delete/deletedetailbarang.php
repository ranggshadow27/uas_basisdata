<?php
include '../../koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM detail_barang WHERE id_detail_barang='$id'");


header('location: ../detailbarang.php');

?>