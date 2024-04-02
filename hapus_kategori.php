<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
	$sql = "DELETE FROM `kategori` WHERE `kategori`.`id` = '$_GET[id]'";
	$koneksi->exec($sql);
}//harus sama dengan line 5-13 di input

header("location:data_kategori.php");
?>