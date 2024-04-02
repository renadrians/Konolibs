<?php
include 'koneksi.php';

$id_peminjaman = $_GET['id'];

$query = "DELETE FROM pengembalian WHERE id_peminjaman='$id_peminjaman'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: pengembalian.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
