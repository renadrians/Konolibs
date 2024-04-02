<?php
include 'koneksi.php';

if (isset($_POST)) {
	$sql = "INSERT INTO kategori (nama_kategori) VALUES ('$_POST[nama_kategori]')";
	$koneksi->exec($sql);
}//harus sama dengan line 5-13 di input

header("location:data_kategori.php");
?>