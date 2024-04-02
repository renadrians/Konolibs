<?php
include 'koneksi.php';

$id_peminjaman = $_POST['id_peminjaman'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$denda = $_POST['denda'];

$query = "INSERT INTO pengembalian (id_peminjaman, tanggal_kembali, denda) VALUES ('$id_peminjaman', '$tanggal_kembali', '$denda')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: pengembalian.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
