<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$user_id = $_POST['user_id'];

if (!empty($user_id)) {
    $query = "UPDATE login_user SET username='$username', password='$password' WHERE id=$user_id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Perubahan berhasil disimpan.";
        header("Location: user.php");
        exit(); 
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "ID pengguna tidak valid.";
}

mysqli_close($koneksi);

?>
