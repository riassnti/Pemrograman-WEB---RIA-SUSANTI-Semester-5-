<?php
$namaServer = "localhost";
$username = "id17797112_utsria";
$password = "vnI4INHD+ygR}}CZ";
$namaDatabase = "id17797112_utsweb";

//Membuat koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDatabase);

//Cek Koneksi
if (!$conn){
    die("Koneksi Gagal".mysqli_connect_error());
}
?>