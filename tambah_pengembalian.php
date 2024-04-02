<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pengembalian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    include 'navbar.php'
    ?>
    <div class="container mt-4">
        <h2>Tambah Data Pengembalian</h2>
        <form action="proses_tambah_pengembalian.php" method="POST">
            <div class="mb-3">
                <label for="id_peminjaman" class="form-label">Pilih ID Peminjaman:</label>
                <select name="id_peminjaman" id="id_peminjaman" class="form-select">
                    <?php
                    include 'koneksi.php';

                    $queryPeminjaman = "SELECT id_peminjaman FROM peminjaman";
                    $resultPeminjaman = mysqli_query($koneksi, $queryPeminjaman);

                    while ($rowPeminjaman = mysqli_fetch_assoc($resultPeminjaman)) {
                        echo "<option value='" . $rowPeminjaman['id_peminjaman'] . "'>" . $rowPeminjaman['id_peminjaman'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="username_peminjam" class="form-label">Pilih Username Peminjam:</label>
                <select name="username_peminjam" id="username_peminjam" class="form-select">
                    <?php
                    $queryUsername = "SELECT id, username FROM login_user";
                    $resultUsername = mysqli_query($koneksi, $queryUsername);

                    while ($rowUsername = mysqli_fetch_assoc($resultUsername)) {
                        echo "<option value='" . $rowUsername['username'] . "'>" . $rowUsername['username'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Pilih Judul Buku:</label>
                <select name="judul_buku" id="judul_buku" class="form-select">
                    <?php
                    $queryBuku = "SELECT id, judul FROM buku";
                    $resultBuku = mysqli_query($koneksi, $queryBuku);

                    while ($rowBuku = mysqli_fetch_assoc($resultBuku)) {
                        echo "<option value='" . $rowBuku['judul'] . "'>" . $rowBuku['judul'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_kembali" class="form-label">Tanggal Kembali:</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control">
            </div>
            <div class="mb-3">
                <label for="denda" class="form-label">Denda:</label>
                <input type="text" name="denda" id="denda" class="form-control">
            </div>
            <input type="submit" value="Tambah" class="btn btn-primary">
        </form>
    </div>

    <?php
    include 'footer.html'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
