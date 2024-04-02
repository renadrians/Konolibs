<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
include 'navbar.php';
?>

    <div class="container">
        <h2>Tambah Data Peminjaman</h2>
        <form action="proses_tambah_peminjaman.php" method="POST">
            <!-- Dropdown untuk memilih Buku -->
            <div class="mb-3">
                <label for="id_buku" class="form-label">Pilih Buku:</label>
                <select name="id_buku" id="id_buku" class="form-select">
                    <?php
                    include 'koneksi.php';

                    $queryBuku = "SELECT id, judul FROM buku";
                    $resultBuku = mysqli_query($koneksi, $queryBuku);

                    while ($rowBuku = mysqli_fetch_assoc($resultBuku)) {
                        echo "<option value='" . $rowBuku['id'] . "'>" . $rowBuku['judul'] . "</option>";
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
                        echo "<option value='" . $rowUser['id'] . "'>" . $rowUser['username'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam:</label>
                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tanggal_kembali" class="form-label">Tanggal Kembali:</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control">
            </div>

            <input type="submit" value="Tambah" class="btn btn-primary">
        </form>
    </div>
<br>
<?php
include 'footer.html';
?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
