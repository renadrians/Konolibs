<!DOCTYPE html>
<html>
<head>
    <title>Data Pengembalian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    include 'navbar.php'
    ?>
    <div class="container mt-4">
        <h2>Data Pengembalian</h2>
        <a href='tambah_pengembalian.php' class='btn btn-primary'>Tambah Data Pengembalian</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Peminjaman</th>
                        <th>Username Peminjam</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Kembali</th>
                        <th>Denda</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';

                    $query = "SELECT pengembalian.id_peminjaman, login_user.username AS username_peminjam, buku.judul AS judul_buku, pengembalian.tanggal_kembali, pengembalian.denda FROM pengembalian 
                              LEFT JOIN peminjaman ON pengembalian.id_peminjaman = peminjaman.id_peminjaman 
                              LEFT JOIN login_user ON peminjaman.id_user = login_user.id 
                              LEFT JOIN buku ON peminjaman.id_buku = buku.id";
                    $result = mysqli_query($koneksi, $query);

                    if (!$result) {
                        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
                        exit();
                    }

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_peminjaman'] . "</td>";
                        echo "<td>" . $row['username_peminjam'] . "</td>";
                        echo "<td>" . $row['judul_buku'] . "</td>";
                        echo "<td>" . $row['tanggal_kembali'] . "</td>";
                        echo "<td>" . $row['denda'] . "</td>";
                        echo "<td><a href='edit_pengembalian.php?id=" . $row['id_peminjaman'] . "' class='btn btn-info'>Edit</a> | <a href='hapus_pengembalian.php?id=" . $row['id_peminjaman'] . "' class='btn btn-danger'>Hapus</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include 'footer.html'
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
