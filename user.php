<?php
include 'koneksi.php';
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

$query = "SELECT * FROM login_user";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    include 'navbar.php'
    ?>

    <div class="container mt-4">
        <a href='tambah_user.php' class='btn btn-primary'>Tambah Data</a><br><br>
        <h2>Daftar Pengguna</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td><a href='edit_user.php?id=" . $row['id'] . "' class='btn btn-info'>Edit</a> | <a href='hapus_user.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a></td>";
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
