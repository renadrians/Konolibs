<?php
include 'koneksi.php';

if (isset($_POST)) {
	$sql = "INSERT INTO buku (id_buku, isbn, judul, nama_penulis, nama_penerbit, nama_kategori, tahun_terbit, sinopsis, jumlah) VALUES ('$_POST[id_buku]', '$_POST[isbn]', '$_POST[judul]', '$_POST[nama_penulis]', '$_POST[nama_penerbit]', '$_POST[nama_kategori]', '$_POST[tahun_terbit]', '$_POST[sinopsis]', '$_POST[jumlah]')";
	$koneksi->exec($sql);
}//harus sama dengan line 5-13 di input

header("location:biblio.php");
?>