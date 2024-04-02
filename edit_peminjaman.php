<?php
include 'koneksi.php';

$id_peminjaman = $_GET['id'];

$query = "SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul AS judul_buku, peminjaman.id_user, login_user.username AS username_peminjam, peminjaman.tanggal_pinjam, peminjaman.tanggal_kembali FROM peminjaman LEFT JOIN buku ON peminjaman.id_buku = buku.id LEFT JOIN login_user ON peminjaman.id_user = login_user.id WHERE peminjaman.id_peminjaman='$id_peminjaman'";
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
    <title>Edit Data Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    include 'navbar.php'
    ?>
    <div class="container mt-4">
        <h2>Edit Data Peminjaman</h2>
        <form action="proses_edit_peminjaman.php" method="POST">
            <input type="hidden" name="id_peminjaman" value="<?php echo $row['id_peminjaman']; ?>">
            
            <div class="mb-3">
                <label for="id_buku" class="form-label">Pilih Buku:</label>
                <select name="id_buku" id="id_buku" class="form-select">
                    <?php
                    $queryBuku = "SELECT id, judul FROM buku";
                    $resultBuku = mysqli_query($koneksi, $queryBuku);

                    while ($rowBuku = mysqli_fetch_assoc($resultBuku)) {
                        $selected = ($row['id_buku'] == $rowBuku['id']) ? 'selected' : '';
                        echo "<option value='" . $rowBuku['id'] . "' $selected>" . $rowBuku['judul'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="id_user" class="form-label">Pilih ID User:</label>
                <select name="id_user" id="id_user" class="form-select">
                    <?php
                    $queryUser = "SELECT id, username FROM login_user";
                    $resultUser = mysqli_query($koneksi, $queryUser);

                    while ($rowUser = mysqli_fetch_assoc($resultUser)) {
                        $selected = ($row['id_user'] == $rowUser['id']) ? 'selected' : '';
                        echo "<option value='" . $rowUser['id'] . "' $selected>" . $rowUser['username'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            
            
            <div class="mb-3">
                <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam:</label>
                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" value="<?php echo $row['tanggal_pinjam']; ?>">
            </div>
            
            <div class="mb-3">
                <label for="tanggal_kembali" class="form-label">Tanggal Kembali:</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" value="<?php echo $row['tanggal_kembali']; ?>">
            </div>
            
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
<br>

<?php
include 'footer.html';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
