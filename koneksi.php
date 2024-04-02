<?php
    $host = "localhost"; // Ganti dengan host database Anda
    $username = "root"; // Ganti dengan username database Anda
    $password = ""; // Ganti dengan password database Anda
    $database = "perpustakaankonoha"; // Ganti dengan nama database Anda

    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Periksa koneksi
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }
?>
