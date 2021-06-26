<?php

include '../../koneksi.php';

$id = $_GET['id'];

$logbarang = "DELETE FROM log_databarang WHERE id_logbarang='$id'";
mysqli_query($conn, $logbarang);

header('location: log_databarang.php');

?>