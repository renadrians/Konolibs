<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
	$sql = "DELETE FROM `buku` WHERE `buku`.`id` = '$_GET[id]'";
	$koneksi->exec($sql);
}//harus sama dengan line 5-13 di input

header("location:biblio.php");
?>