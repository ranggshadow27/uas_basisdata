<?php

include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $user = $_POST['user'];
    $password = md5($_POST['password']);

    $regist ="INSERT INTO user_login VALUES('', '$user','$password')";
    mysqli_query($conn, $regist);
    header('location: index.php?pesan=registrasi_sukses');
}else{
    echo 'Eror Boi';
}

?>