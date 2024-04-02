<?php
include 'koneksi.php';

$id_peminjaman = $_GET['id'];

$query = "DELETE FROM peminjaman WHERE id_peminjaman='$id_peminjaman'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: peminjaman.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
