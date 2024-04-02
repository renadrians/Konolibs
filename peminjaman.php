<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
include 'koneksi.php';

$query = "SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul AS judul_buku, peminjaman.id_user, login_user.username AS username_peminjam, peminjaman.tanggal_pinjam, peminjaman.tanggal_kembali FROM peminjaman LEFT JOIN buku ON peminjaman.id_buku = buku.id LEFT JOIN login_user ON peminjaman.id_user = login_user.id";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    exit();
}
include 'navbar.php';
echo "<div class='container'>";

echo "<h2>Data Peminjaman</h2>";
echo "<a href='tambah_peminjaman.php'><button class='btn btn-primary'>Tambah Data Peminjaman</button></a><br><br>";

echo "<div class='table-responsive'>";
echo "<table class='table table-bordered table-striped'>";
echo "<thead class='thead-dark'>";
echo "<tr><th>ID Peminjaman</th><th>ID Buku</th><th>Judul Buku</th><th>ID User</th><th>Username Peminjam</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th><th>Action</th></tr>";
echo "</thead>";
echo "<tbody>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id_peminjaman'] . "</td>";
    echo "<td>" . $row['id_buku'] . "</td>";
    echo "<td>" . $row['judul_buku'] . "</td>";
    echo "<td>" . $row['id_user'] . "</td>";
    echo "<td>" . $row['username_peminjam'] . "</td>";
    echo "<td>" . $row['tanggal_pinjam'] . "</td>";
    echo "<td>" . $row['tanggal_kembali'] . "</td>";
    echo "<td><a href='edit_peminjaman.php?id=" . $row['id_peminjaman'] . "' class='btn btn-info'>Edit</a> | <a href='hapus_peminjaman.php?id=" . $row['id_peminjaman'] . "' class='btn btn-danger'>Hapus</a></td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";

include'footer.html';
mysqli_close($koneksi);
?>
