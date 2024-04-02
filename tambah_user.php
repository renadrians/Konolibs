<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    include 'navbar.php'
    ?>
    <div class="container mt-4">
        <h2>Tambah Pengguna</h2>
        <form action="proses_tambah_user.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label><br>
                <input type="text" id="username" name="username" class="form-control"><br>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label><br>
                <input type="password" id="password" name="password" class="form-control"><br><br>
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
