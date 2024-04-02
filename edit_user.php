<?php
include 'koneksi.php';

// Pastikan ada nilai ID yang dikirimkan melalui URL
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Query untuk mengambil data pengguna berdasarkan ID
    $query = "SELECT * FROM login_user WHERE id = $user_id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
        // Isi nilai pengguna ke dalam formulir
        $username = $user['username'];
        $password = $user['password'];
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "ID pengguna tidak ditemukan.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengguna</title>
    <!-- Tambahkan link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    include 'navbar.php'
    ?>
    <div class="container mt-4">
        <h2>Edit Pengguna</h2>
        <form action="proses_edit_user.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label><br>
                <!-- Tampilkan nilai username -->
                <input type="text" id="username" name="username" class="form-control" value="<?php echo $username; ?>"><br>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label><br>
                <!-- Tampilkan nilai password -->
                <input type="password" id="password" name="password" class="form-control" value="<?php echo $password; ?>"><br><br>
            </div>
            <!-- Gunakan hidden input untuk menyimpan nilai ID pengguna -->
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </form>
    </div>
    <?php
    include 'footer.html'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
