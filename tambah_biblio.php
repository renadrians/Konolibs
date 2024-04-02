<?php
	include 'header.php'
?>
 <title>Entri Data</title>
<div class="container">
	<div class="row">
		<div class="col-lg-12 mt-2 mb-2" style="min-height: 530px;">
			<div class="card">
			  <div class="card-header">
				Tambah Bibliografi
			  </div>
			  <div class="card-body">
				<div class="row">
					<div class="col">
						<form action="simpan_biblio.php" method="POST">
							<p>
								<div class="form-group mb-3">
									<label for="">ID Buku</label>
									<input type="text" class="form-control" placeholder="SRxxx" 
									name="id_buku">
								</div>
							</p>
							<p >
								<div class="form-group mb-3">
									<label for="">ISBN</label>
									<input type="text" class="form-control" placeholder="Enter ISBN" 
									name="isbn">
								</div>
							</p>
							<p >
								<div class="form-group mb-3">
									<label for="">Judul Buku</label>
									<input type="text" class="form-control" placeholder="Judul" 
									name="judul">
								</div>
							</p>
							<p >
								<div class="form-group mb-3">
									<label for="">Penulis</label>
									<input type="text" class="form-control" placeholder="Nama Penulis" 
									name="nama_penulis">
								</div>
							</p>
							<p >
								<div class="form-group mb-3">
									<label for="">Penerbit</label>
									<input type="text" class="form-control" placeholder="Nama Penerbit" 
									name="nama_penerbit">
								</div>
							</p>
							<p >
								<div class="form-group mb-3">
									<label for="">Kategori</label>
									<input type="text" class="form-control" placeholder="kategori" 
									name="nama_kategori">
								</div>
							</p>
							<p >
								<div class="form-group mb-3">
									<label for="">Tahun Terbit</label>
									<input type="text" class="form-control" placeholder="Tahun" 
									name="tahun_terbit">
								</div>
							</p>
							<p >
								<div class="form-group mb-3">
									<label for="">sinopsis</label>
									<input type="text" class="form-control" placeholder="sinopsis" 
									name="sinopsis">
								</div>
							</p>
							<p >
								<div class="form-group mb-3">
									<label for="">Jumlah Buku</label>
									<input type="text" class="form-control" placeholder="Jumlah Buku" 
									name="jumlah">
								</div>
							</p>
						<input type="submit" class="btn btn-primary" value="Simpan">
						</form>
					</div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>


<?php
	include 'footer.html'
?>