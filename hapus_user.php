<?php
include 'koneksi.php';

$user_id = $_GET['id'];

$query = "DELETE FROM login_user WHERE id=$user_id";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: user.php");
    exit(); 
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
