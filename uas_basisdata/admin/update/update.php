<?php
error_reporting(E_ALL);
include_once '../../koneksi.php';

if (isset($_POST['submit']))
{
    $id = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $id_detail_barang = $_POST['id_detail_barang'];
    $id_distributor = $_POST['id_distributor'];
    $harga_barang = $_POST['harga_barang'];
    $stok_barang = $_POST['stok_barang'];

    
    $databarang ="UPDATE data_barang SET id_detail_barang = '$id_detail_barang', nama_barang = '$nama_barang', harga_barang = '$harga_barang', id_distributor= '$id_distributor', stok_barang= '$stok_barang' WHERE id_barang = '$id'";
    mysqli_query($conn, $databarang);

    header('location: ../databarang.php');
}else{
    echo 'Eror Boi';
}

if (isset($_POST['submit_pembeli']))
{
    $id_pembeli = $_POST['id_pembeli'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $tgl_transaksi_pembelian = $_POST['tgl_transaksi_pembelian'];
    $id_barang = $_POST['id_barang'];
    $jumlah_transaksi = $_POST['jumlah_transaksi'];
    $jumlah_uang_kembali = $_POST['jumlah_uang_kembali'];

    
    $datapembeli ="UPDATE data_pembeli SET nama_pembeli = '$nama_pembeli', tgl_transaksi_pembelian = '$tgl_transaksi_pembelian', id_barang = '$id_barang', jumlah_transaksi= '$jumlah_transaksi', jumlah_uang_kembali= '$jumlah_uang_kembali' WHERE id_pembeli = '$id_pembeli'";
    
    mysqli_query($conn, $datapembeli);

    header('location: ../datapembeli.php');
}else{
    echo 'Eror Boi';
}

if (isset($_POST['submit_distributor']))
{
    $id_distributor = $_POST['id_distributor'];
    $nama_distributor = $_POST['nama_distributor'];
    
    $datadistributor ="UPDATE data_distributor SET nama_distributor = '$nama_distributor' WHERE id_distributor = '$id_distributor'";
    
    mysqli_query($conn, $datadistributor);

    header('location: ../datadistributor.php');
}else{
    echo 'Eror Boi';
}

if (isset($_POST['submit_pembelian']))
{
    $id_pembelian_barang = $_POST['id_pembelian_barang'];
    $id_distributor = $_POST['id_distributor'];
    $tgl_transaksi_pembelian = $_POST['tgl_transaksi_pembelian'];
    $total_transaksi = $_POST['total_transaksi'];
    
    $datapembelian ="UPDATE data_pembelian_barang SET id_distributor = '$id_distributor', tgl_transaksi_pembelian = '$tgl_transaksi_pembelian', total_transaksi = '$total_transaksi' WHERE id_pembelian_barang = '$id_pembelian_barang'";
    
    mysqli_query($conn, $datapembelian);

    header('location: ../datapembelianbarang.php');
}else{
    echo 'Eror Boi';
}

if (isset($_POST['submit_detailbarang']))
{
    $id_detail_barang = $_POST['id_detail_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $keterangan_barang = $_POST['keterangan_barang'];
    
    $detailbarang ="UPDATE detail_barang SET jenis_barang = '$jenis_barang', keterangan_barang = '$keterangan_barang' WHERE id_detail_barang = '$id_detail_barang'";
    
    mysqli_query($conn, $detailbarang);

    header('location: ../detailbarang.php');
}else{
    echo 'Eror Boi';
}

?>
