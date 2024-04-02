<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a href="#" class="logo">
      <img src="font.png" width="300px" alt="Logo"></img>
    </a>
    <a class="navbar-brand" href="home.php">Brand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <!-- Dropdown menu -->
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
        <!-- Other menu items -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="opac.php">OPAC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="biblio.php">Bibliography</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user.php">User</a>
        </li>
        <!-- Dropdown menu for Circulation -->
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
        <!-- Other menu items -->
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
