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
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
	<a href="home.php" class="logo">
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
          <a class="nav-link active" aria-current="page" href="User.php">User</a>
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