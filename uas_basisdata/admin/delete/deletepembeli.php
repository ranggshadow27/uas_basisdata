<?php
include '../../koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM data_pembeli WHERE id_pembeli='$id'");


header('location: ../datapembeli.php');

?>