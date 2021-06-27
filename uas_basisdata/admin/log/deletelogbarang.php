<?php
include '../../koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM log_databarang WHERE id_logbarang='$id'");


header('location: log_databarang.php');

?>