<?php
include '../../koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM data_distributor WHERE id_distributor='$id'");


header('location: ../datadistributor.php');

?>