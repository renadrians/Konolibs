<?php
	include "koneksi.php";
?>
<html lang="en">
  <head>
  <style>
			nav {
            background-color: #555;
            color: #fff;
            padding: 1em;
            text-align: right;
        }
		
	        footer {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<!-- navbar -->
	<nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid">
	<a href="#" class="logo">
	<img src="font.png" width="300px"></img></a>
    <a class="navbar-brand" href="home.php"</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data Master
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="penulis.php">Penulis</a></li>
            <li><a class="dropdown-item" href="penerbit.php">Penerbit</a></li>
			<li><a class="dropdown-item" href="data_kategori.php">Kategori</a></li>
			<li><a class="dropdown-item" href="user.php">User</a></li>
          </ul>
        </li>
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="opac.php">OPAC</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="biblio.php">Bibliography</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user.php">User</a>
        </li>
		 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Circulation
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="peminjaman.php">Peminjaman</a></li>
            <li><a class="dropdown-item" href="pengembalian.php">Pengembalian</a></li>
            <li><a class="dropdown-item" href="tambah_biblio.php">Pengadaan</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
<!-- akhir navbar -->
<!-- content -->
<div class="container">
	<div class="row">
		<div class="col-lg-12 mt-2">
			<div class="jumbotron">
				<div class="container">
			  <h1 class="display-4"><font style="bold">Selamat Datang!</font></h1>
			  <p class="lead">Ini merupakan sistem otomasi perpustakaan yang dibuat oleh kelompok 2</p>
			  <hr class="my-4">
			  <p>Praktikum Aplikasi Teknologi Informasi</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col mb-2"  style="min-height: 530px;">
					<div class="card">
			  <div class="card-body">
				<h5 class="card-title">Peminjaman</h5>
				<p class="card-text">Klik disini untuk melihat peminjaman</p>
				<a href="#" class="btn btn-primary">Peminjaman</a>
			  </div>
			</div>
		</div>
		<div class="col">
					<div class="card">
			  <div class="card-body">
				<h5 class="card-title">Pengembalian</h5>
				<p class="card-text">Klik disini untuk lihat pengembalian</p>
				<a href="#" class="btn btn-primary">Pengembalian</a>
			  </div>
			</div>
		</div>
		<div class="col">
					<div class="card">
			  <div class="card-body">
				<h5 class="card-title">Data Koleksi</h5>
				<p class="card-text">Klik disini untuk melihat data koleksi</p>
				<a href="biblio.php" class="btn btn-primary">Bibliography</a>
			  </div>
			</div>
		</div>
		<div class="col">
					<div class="card">
			  <div class="card-body">
				<h5 class="card-title">Data User</h5>
				<p class="card-text">Jumlah User</p>
				<a href="user.php" class="btn btn-primary">User</a>
			  </div>
			</div>
		</div>
	</div>
</div>
<!-- akhir content -->



<!-- footer -->
    <footer>
    <p>&copy; 2023 Perpustakaan Digital Konoha</p>
	</footer>
<!-- akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>