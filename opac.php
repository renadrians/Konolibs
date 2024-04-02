<?php
	include 'header.php';
	include 'koneksi.php';
?>

 <title>OPAC</title>
 
<style>
	tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #ededed;
    }
    table{
        width: 100%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #0582ca;
    }
</style>
<center><font face="Britannic Bold" color="#457B9D"><h1 align="center">OPAC</h1></font></center>
<div class="container">
	<div class="row">
		<div class="col-lg-12 mt-2 mb-2" style="min-height: 530px;">
			<div class="card">
			  <div class="card-header">
				Data Koleksi
			  </div>
			  <div class="card-body">
				<div class="row">
					<div class="col mb-3">
						<form class="form-inline float-right" method="GET">
							<input type="text" class="form-control" name="keyword" placeholder="Kata Kunci">
							<input type="submit" class="btn btn-primary" name="cari" value="Cari">
						</form>
					</div>
				</div>
				
				<table border="0">
					<thead>
						<tr>
							<th>No</th>
							<th>id_buku</th>
							<th>ISBN</th>
							<th>Judul</th>
							<th>Nama Penulis</th>
							<th>Nama Penerbit</th>
							<th>Kategori</th>
							<th>Tahun</th>
							<th>Jumlah</th>
							<th>Sinopsis</th>
						</tr>
					</thead>
							    <tbody>
									<?php
									$sql = "SELECT * FROM buku ORDER BY id_buku";
									if (isset($_GET['cari'])) {
										$keyword=$_GET['keyword'];
										$sql = "SELECT * FROM buku WHERE judul LIKE '%$keyword%'";
									}
									$no  = 1;
									foreach ($koneksi->query($sql) as $data) ://satu-satu, no++ untuk otomatis habis 1 langsung 2//
									?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['id_buku'] ?></td>
											<td><?php echo $data['isbn'] ?></td>
											<td><?php echo $data['judul'] ?></td>
											<td><?php echo $data['nama_penulis'] ?></td>
											<td><?php echo $data['nama_penerbit'] ?></td>
											<td><?php echo $data['nama_kategori'] ?></td>
											<td><?php echo $data['tahun_terbit'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['sinopsis'] ?></td>
										</tr>
									<?php
									endforeach;
									?>
								</tbody>
						</table>
					</div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>


<?php
	include 'footer.html'
?>;