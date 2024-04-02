<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO login_user (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "berhasil menambahkan user";
    header("Location: user.php");
    exit(); 
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>