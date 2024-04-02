<?php
include 'koneksi.php';

$id_peminjaman = $_GET['id'];

$query = "SELECT pengembalian.id_peminjaman, login_user.username AS username_peminjam, buku.judul AS judul_buku, pengembalian.tanggal_kembali, pengembalian.denda FROM pengembalian 
          LEFT JOIN peminjaman ON pengembalian.id_peminjaman = peminjaman.id_peminjaman 
          LEFT JOIN login_user ON peminjaman.id_user = login_user.id 
          LEFT JOIN buku ON peminjaman.id_buku = buku.id 
          WHERE pengembalian.id_peminjaman='$id_peminjaman'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    exit();
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pengembalian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    include 'navbar.php'
    ?>
    <div class="container mt-4">
        <h2>Edit Data Pengembalian</h2>
        <form action="proses_edit_pengembalian.php" method="POST">
            <input type="hidden" name="id_peminjaman" value="<?php echo $row['id_peminjaman']; ?>">
            <div class="mb-3">
                <label for="username_peminjam" class="form-label">Username Peminjam:</label>
                <input type="text" name="username_peminjam" id="username_peminjam" class="form-control" value="<?php echo $row['username_peminjam']; ?>">
            </div>
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul Buku:</label>
                <input type="text" name="judul_buku" id="judul_buku" class="form-control" value="<?php echo $row['judul_buku']; ?>">
            </div>
            <div class="mb-3">
                <label for="tanggal_kembali" class="form-label">Tanggal Kembali:</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" value="<?php echo $row['tanggal_kembali']; ?>">
            </div>
            <div class="mb-3">
                <label for="denda" class="form-label">Denda:</label>
                <input type="text" name="denda" id="denda" class="form-control" value="<?php echo $row['denda']; ?>">
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
    <?php
    include 'footer.html'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
