<?php
include 'koneksi.php';

$id_buku = $_POST['id_buku'];
$id_user = $_POST['id_user'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];

$query = "INSERT INTO peminjaman (id_buku, id_user, tanggal_pinjam, tanggal_kembali) VALUES ('$id_buku', '$id_user', '$tanggal_pinjam', '$tanggal_kembali')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: peminjaman.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
