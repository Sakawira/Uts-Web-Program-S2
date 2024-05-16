<?php
require_once"app.php";
$n = kucingBaru($conn, $_POST);
session_start();
//simpan $_POST ke database

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_KUCING'] = 'Gagal menambah data';
} else $_SESSION['BERHASIL_TAMBAH_KUCING'] = 
"Berhasil menambah data Kucing: {$_POST['jenis_kucing']}, Nama Kucing: {$_POST['nama_kucing']}, Harga Kucing: {$_POST['harga_kucing']} ";
header("location: /kucing.php");
die();